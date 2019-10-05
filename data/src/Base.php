<?php
namespace D8devs\D8Karar;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Base {

    public $twig;
    public $entityManager;

    function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/Template');
        $this->twig = new \Twig\Environment($loader);

        // Create a simple "default" Doctrine ORM configuration for Annotations
        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

        // database configuration parameters
        $conn = array(
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/db.sqlite',
        );

        // obtaining the entity manager
        $this->entityManager = EntityManager::create($conn, $config);
    }

}
