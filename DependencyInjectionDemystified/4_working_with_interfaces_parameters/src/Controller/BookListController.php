<?php 

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\BookLoader;
use Twig\Environment;

/**
 * @Route("/")
 */
final class BookListController 
{

    private BookLoader $bookRepository;
    private Environment $twig;

    public function __construct(BookLoader $bookRepository, Environment $twig)
    {
        $this->bookRepository = $bookRepository;
        $this->twig = $twig;
    }
    
    public function __invoke(): Response
    {
        return new Response( 
            $this->twig->render('test.html.twig', [
                'books' => $this->bookRepository->findAll()
            ])
        );
    }
}