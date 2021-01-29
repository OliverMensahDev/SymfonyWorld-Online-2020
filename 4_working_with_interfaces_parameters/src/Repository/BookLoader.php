<?php 

namespace App\Repository;

interface BookLoader
{
    public function findAll(): array;
}