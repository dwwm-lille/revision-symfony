<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColorController extends AbstractController
{
    #[Route('/color/{color}', name: 'app_color')]
    public function index($color): Response
    {
        return $this->render('color/index.html.twig', [
            'color' => $color,
        ]);
    }
}
