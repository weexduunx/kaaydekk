<?php

namespace App\Controller;

use App\Entity\Inscription;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\utile\MatriculeGenerator;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\InscriptionRepository;
use App\Form\InscriptionType;




class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'inscription')]
    public function index(Request $request, MatriculeGenerator $matriculeGenerator,InscriptionRepository $inscriptionRepository ): Response
    {
          // 1) je crée le formulaire
          $candidat = new Inscription();
          $form = $this->createForm(InscriptionType::class, $candidat);

            // 2) recupérer la soumission (will only happen on POST)
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {


             $candidat->setLabel($matriculeGenerator->generate($candidat));
             // 3) sauvegarder le client!
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($candidat);
             $entityManager->flush();

             // ... do any other work - like sending them an email, etc
             // maybe set a "flash" success message for the user
             $this->addFlash('success', 'Votre inscription a été enregistrée avec succés');

             return $this->redirectToRoute('merci');
         }

      return $this->render('inscription/inscription.html.twig',[
          'form' =>$form->createView(),
          'candidats' => $inscriptionRepository->findAll(),
      ]);
  }
}
