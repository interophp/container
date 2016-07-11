<?php

namespace InteroPhp\Container;

interface ContainerInterface
{
    public function has($id);
    public function get($id);
}
