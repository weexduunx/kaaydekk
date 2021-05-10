<?php
namespace App\Controller;

use App\Repository\BienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{



    /**
     * @Route ("/", name="home")
     * @param \App\Repository\BienRepository $repository
     * @return Response
     */
    public function index(BienRepository $repository): Response
    {
        $properties = $repository->findLatest();
        return $this->render('pages/home.html.twig',[
           'properties'=>$properties
            ]);
    }

}