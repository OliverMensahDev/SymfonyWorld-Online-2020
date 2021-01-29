<?php 

namespace App\Repository;

/**
 * @Route("/")
 */
final class BookRepository 
{
    
    public function findAll(): array
    {
        return [
             "Aki Ola Math",
             "Aki Ola English"
        ];
    }
}