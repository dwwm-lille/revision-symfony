<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Request $request): Response
    {
        return $this->render('search/index.html.twig', [
            'search' => $request->get('search'),
        ]);
    }

    #[Route('/search-confirm', name: 'app_search_confirm')]
    public function confirm(Request $request): Response
    {
        $search = $request->get('search');

        if (!$search) {
            return $this->redirectToRoute('app_search');
        }

        return $this->render('search/confirm.html.twig', [
            'search' => $request->get('search'),
        ]);
    }
}
