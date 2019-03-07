<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StPaulController extends AbstractController
{
    /**
     * @Route("/st/paul", name="st_paul")
     */
    public function index()
    {
        return $this->render('st_paul/indexOld.php', [
            'controller_name' => 'StPaulController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('st_paul/indexOld.php', [
            'controller_name' => 'StPaulController',
        ]);
    }
}


