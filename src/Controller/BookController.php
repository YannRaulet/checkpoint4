<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(name="book_")
 */
class BookController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
        'website' => 'Dream Books',
        ]);
    }
    /**
     * @Route("/book-details", name="details")
     */
    public function details(): Response
    {
        return $this->render('book/book_details.html.twig', [
        'website' => 'Dream Books',
        ]);
    }
}
