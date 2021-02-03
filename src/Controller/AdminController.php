<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\BookRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Book;


/**
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{
    /**
     * Displays the page home administrator
     * @Route(name="home")
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('admin/home.html.twig');
    }
}