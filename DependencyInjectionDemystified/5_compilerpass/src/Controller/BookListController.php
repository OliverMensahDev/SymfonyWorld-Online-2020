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

    private iterable $bookLoaders;
    private Environment $twig;

    /**
     * @param iterable|BookLoader[] $bookLoaders
     */
    public function __construct(iterable $bookLoaders, Environment $twig)
    {
        $this->bookLoaders = $bookLoaders;
        $this->twig = $twig;
    }
    
    public function __invoke(): Response
    {
        return new Response( 
            $this->twig->render('test.html.twig', [
                'books' => $this->loadBooks()
            ])
        );
    }

    private function loadBooks(): array 
    {
        $books = [];
        foreach($this->bookLoaders as $loader){
            $books[] = $loader->findAll();
        }
        return array_merge(...$books);
    }
}