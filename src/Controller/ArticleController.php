<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/articles', name: 'app_article')]
    public function index(): Response
    {
        $articles = [
            ['title' => 'Test 1', 'content' => 'Lorem ipsum', 'publishedAt' => new \DateTime(), 'author' => 'Fiorella'],
            ['title' => 'Test 2', 'content' => 'Lorem ipsum', 'publishedAt' => new \DateTime(), 'author' => 'Matthieu'],
            ['title' => 'Test 3', 'content' => 'Lorem ipsum', 'publishedAt' => new \DateTime(), 'author' => 'Marina'],
        ];

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
