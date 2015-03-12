// src/FE/UserBundle/DependencyInjection/FEUserExtension.php
<?php

namespace FE\UserBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FEUserExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // ... you'll load the files here later
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.yml');
    }
}