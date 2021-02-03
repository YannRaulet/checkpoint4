<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BookRepository;

/**
 * @Route(name="book_")
 */
class BookController extends AbstractController
{
    /**
     * Displays home page
     * @Route("/", name="index")
     * @return Response
     */
    public function index(BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig', [
            'books' => $bookRepository->findAll(),
        ]);
    }

    /**
     * Displays informations about the choosen book
     * @Route("/book-details/{id}", name="details")
     * @return Response
     */

    public function details(BookRepository $bookRepository, int $id): Response
    {
        return $this->render('book/book_details.html.twig', [
            'book' => $bookRepository->findOneBy(
                ['id' => $id
                ]
            )
        ]);
    }
}
