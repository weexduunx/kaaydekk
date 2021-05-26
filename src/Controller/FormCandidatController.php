<?php

namespace App\Controller;

use App\Entity\DetailsCandidature;
use App\Form\CandidatureFormType;
use App\Repository\DetailsCandidatureRepository;
use App\utile\MatriculeGenerator;
use Mail;
use \Mailjet\Resources;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormCandidatController extends AbstractController
{
    /**
     * @Route("/form/candidat", name="form_candidat")
     */
    public function index(Request $request, MatriculeGenerator $matriculeGenerator, DetailsCandidatureRepository $detailsCandidatureRepository ): Response
    {
            // 1) je crée le formulaire
            $candidat = new DetailsCandidature();
            $form = $this->createForm(CandidatureFormType::class, $candidat);

              // 2) recupérer la soumission (will only happen on POST)
           $form->handleRequest($request);
           if ($form->isSubmitted() && $form->isValid()) {


            $candidat->setLabel($matriculeGenerator->generate($candidat));

               // 3) sauvegarder le client!
               $entityManager = $this->getDoctrine()->getManager();
               $entityManager->persist($candidat);
               $entityManager->flush();
               $client = $candidat->getClient()->getNom();
              
               // ... do any other work - like sending them an email, etc
               // maybe set a "flash" success message for the user
               $this->addFlash('success', 'Votre inscription a été enregistrée avec succés');
   
               return $this->redirectToRoute('merci');
           }
   
        return $this->render('form_candidat/form1.html.twig',[
            'form' =>$form->createView(),
            'candidats' => $detailsCandidatureRepository->findAll(),
        ]);
    }
}
