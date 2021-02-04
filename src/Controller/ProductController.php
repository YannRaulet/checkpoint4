<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BookRepository;
use App\Repository\MovieRepository;
 

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
    public function index(BookRepository $bookRepository, MovieRepository $movieRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'books' => $bookRepository->findAll(),
            'movies' => $movieRepository->findAll(),
        ]);
    }

    /**
     * Displays informations about the choosen book
     * @Route("/book-details/{id}", name="book_details")
     * @return Response
     */

    public function bookDetails(BookRepository $bookRepository, int $id): Response
    {
        return $this->render('product/book_details.html.twig', [
            'book' => $bookRepository->findOneBy(
                ['id' => $id
                ]
            )
        ]);
    }

    /**
     * Displays informations about the choosen movie
     * @Route("/movie-details/{id}", name="movie_details")
     * @return Response
     */

    public function movieDetails(MovieRepository $movieRepository, int $id): Response
    {
        return $this->render('product/movie_details.html.twig', [
            'movie' => $movieRepository->findOneBy(
                ['id' => $id
                ]
            )
        ]);
    }
}
