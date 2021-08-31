<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormClientController extends AbstractController
{
    /**
     * @Route("/form/client", name="form_client")
     */
    public function register(Request $request)
    {

         // 1) je crée le formulaire
         $client = new Client();
         $form = $this->createForm(ClientFormType::class, $client);
 
           // 2) recupérer la soumission (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

          
            // 3) sauvegarder le client!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($client);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('form_candidat');
        }


        return $this->render('inscription/inscription.html.twig',
         array('form' =>$form->createView())

        );
    }
}
