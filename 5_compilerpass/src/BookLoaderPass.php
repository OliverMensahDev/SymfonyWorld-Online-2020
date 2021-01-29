<?php

namespace App;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use App\Controller\BookListController;

final class BookLoaderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $loaders = array_map(
            static fn(string $id) => new Reference($id),
            array_keys($container->findTaggedServiceIds('book_loader', true))
        );
        $container->getDefinition(BookListController::class)->setArgument('$bookLoaders', $loaders);
    }
}