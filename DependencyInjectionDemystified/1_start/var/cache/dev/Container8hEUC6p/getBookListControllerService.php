<?php

namespace Container8hEUC6p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookListControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BookListController' shared service.
     *
     * @return \App\Controller\BookListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/BookListController.php';

        return $container->services['App\\Controller\\BookListController'] = new \App\Controller\BookListController();
    }
}
