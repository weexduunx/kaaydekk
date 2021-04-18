<?php

namespace App\Controller;

use App\Entity\Bien;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
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
     * @var \App\Repository\BienRepository
     */
    private BienRepository $repository;
    /**
     * @var \Doctrine\Persistence\ObjectManager
     */
    private ObjectManager $em;

    public function  __construct(BienRepository $repository)
    {
        $this->repository = $repository;

    }

    /**
     * @Route("/biens", name="property.index")
     * @param PaginatorInterface $paginator
     * @param \Symfony\Component\HttpFoundation\Request $request
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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public  function show(Bien $property, string $slug): Response
    {
        if ($property->getSlug() !== $slug){
          return  $this->redirectToRoute('bien.show',[
                'id' =>$property->getId(),
                'slug'=>$property->getSlug()
            ],301);
        }
      return $this->render('property/show.html.twig',[
          'bien'=>$property,
          'current_menu'=>'properties'

          ]);
    }
}
