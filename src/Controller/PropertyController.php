<?php

namespace App\Controller;

use App\Entity\Bien;
use App\Entity\Contact;
use App\Entity\PropertySearch;
use App\Form\ContactType;
use App\Form\PropertySearchType;
use App\Notification\ContactNotification;
use App\Repository\BienRepository;
use Doctrine\Persistence\ObjectManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @var BienRepository
     */
    private BienRepository $repository;
    /**
     * @var ObjectManager
     */
    private ObjectManager $em;

    public function  __construct(BienRepository $repository)
    {
        $this->repository = $repository;

    }

    /**
     * @Route("/biens", name="property.index")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request):Response
    {
        $search = new  PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $search);
        $form->handleRequest($request);

        $properties = $paginator->paginate(
            $this->repository->findAllVisibleQuery($search),
            $request->query->getInt('page', 1),
            12
        );
        return $this->render('property/index.html.twig',[
          'current_menu'=> 'properties',
          'properties'  =>  $properties,
          'form'        =>  $form->createView()
        ]);
    }

    /**
     * @Route("/biens/{slug}-{id}", name="bien.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param \App\Entity\Bien $property
     * @param string $slug
     * @param Request $request
     * @param ContactNotification $notification
     * @return Response
     */
    public  function show(Bien $property, string $slug, Request $request, ContactNotification $notification): Response
    {

        if ($property->getSlug() !== $slug){
            return  $this->redirectToRoute('bien.show',[
                'id'     =>$property->getId(),
                'slug'   =>$property->getSlug()
            ],301);
        }

        $contact = new Contact();
        $contact->setBien($property);
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $notification->notify($contact);
            $this->addFlash('success','Votre email a bien été envoyé');

            return  $this->redirectToRoute('bien.show',[
                'id'     =>$property->getId(),
                'slug'   =>$property->getSlug()
            ]);

        }

        return $this->render('property/show.html.twig',[
              'bien'        => $property,
              'current_menu'=>'properties',
              'form'        => $form->createView()
          ]);
    }
}
