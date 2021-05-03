<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/clients", name="api_index", methods={"GET"})
     */
    public function index(ClientRepository $clientRepository): Response
    {
       
        return $this->json($clientRepository->findAll(), 200, []);
    }
}
