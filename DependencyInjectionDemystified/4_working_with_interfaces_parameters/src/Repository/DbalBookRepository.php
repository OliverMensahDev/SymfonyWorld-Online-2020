<?php 

namespace App\Repository;

/**
 * @Route("/")
 */
final class DbalBookRepository implements BookLoader
{
    
    public function findAll(): array
    {
        return [
             "Aki Ola Math from DB",
             "Aki Ola English from DB"
        ];
    }
}