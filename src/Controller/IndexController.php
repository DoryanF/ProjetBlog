<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ArticleRepository $articleRepository, UserRepository $userRepository)
    {
     
        // dd($userRepository);

        return $this->render('index.html.twig',[
            'articles' => $articleRepository->findAll(),
        ]);
    }
}