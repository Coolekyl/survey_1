<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultEnqController extends AbstractController
{
    /**
     * @Route("/default/enq", name="default_enq")
     */
    public function index()
    {
        return $this->render('default_enq/index.html.twig', [
            'controller_name' => 'DefaultEnqController',
        ]);
    }
}
