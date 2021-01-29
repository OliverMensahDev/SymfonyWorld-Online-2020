<?php 

namespace App\Repository;

/**
 * @Route("/")
 */
final class BookRepository implements BookLoader
{
    
    public function findAll(): array
    {
        return [
             "Aki Ola Math",
             "Aki Ola English"
        ];
    }
}