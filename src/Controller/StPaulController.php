<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sejour;
use App\Repository\SejourRepository;

class StPaulController extends AbstractController
{
    /**
     * @Route("/st/paul", name="st_paul")
     */
    public function index()
    {
        return $this->render('st_paul/index.html.twig', [
            'controller_name' => 'StPaulController',
            'sejour' => 1
        ]);
    }

    /**
     * @Route("/", name="test2")
     */
    public function test2(SejourRepository $repo)
    {
       
        $sejours = $repo->findAll();

        return $this->render('st_paul/indexNew.html.twig', [
            'controller_name' => 'StPaulController',
            'sejours' => $sejours

        ]);
    }

    /**
     * @Route("/0", name="home")
     */
    public function home()
    {
        return $this->render('st_paul/indexOld.php', [
            'controller_name' => 'StPaulController',
        ]);
    } 
}


