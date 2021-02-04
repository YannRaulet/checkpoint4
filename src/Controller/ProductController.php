<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BookRepository;

/**
 * @Route(name="product_")
 */
class ProductController extends AbstractController
{
    /**
     * Displays home page
     * @Route("/", name="index")
     * @return Response
     */
    public function index(BookRepository $bookRepository): Response
    {
        return $this->render('product/index.html.twig', [
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
        return $this->render('product/book_details.html.twig', [
            'book' => $bookRepository->findOneBy(
                ['id' => $id
                ]
            )
        ]);
    }
}
