<?php

namespace AppBundle\Services;

use AppBundle\Services\Factory\ChildrenVadorFactoryInterface;

abstract class ParentDarkVador
{
    public const TWIG_NAMESPACE = 'AppBundle\StarWars';

    protected $env;

    public function __construct(string $env)
    {
        $this->env = $env;
    }

    public function setFactory(ChildrenVadorFactoryInterface $factory): void
    {
        $this->factory = $factory;
    }

    public function getFactory(): ChildrenVadorFactoryInterface
    {
        return $this->factory;
    }

    public function whoIam()
    {
        return $this->factory->create();
    }
}
