<?php

namespace  AppBundle\Services\Factory;

class LukeFactory implements ChildrenVadorFactoryInterface
{
    public function create(): string
    {
      return 'Luke je suis ton père !';
    }
}
