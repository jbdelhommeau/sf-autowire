<?php

namespace AppBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

final class AppExtension extends Extension
{
    public function load(array $config, ContainerBuilder $container): void
    {
       $loader = new YamlFileLoader($container, new FileLocator(dirname(__DIR__) . '/Resources/config'));
       $loader->load('services.yml');
    }
}
