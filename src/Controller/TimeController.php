<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TimeController extends AbstractController
{
    #[Route('/time/now', name: 'app_time')]
    public function index(): Response
    {
        $clock = new \DateTime();

        return $this->render('time/index.html.twig', [
            'clock' => $clock->format('d/m/Y H:i:s'),
            // 'clock' => date('d/m/Y H:i:s'),
        ]);
    }

    #[Route('/ip', name: 'app_ip')]
    public function ip(Request $request): Response
    {
        return $this->render('ip.html.twig', [
            'ip' => $request->getClientIp(),
        ]);
    }
}
