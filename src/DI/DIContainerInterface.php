<?php

namespace TreeComponent\DI;

/**
 * Interface DIContainerInterface
 * @package TreeComponent\DI
 * @author Petr Marochkin <petun911@gmail.com>
 */
interface DIContainerInterface
{
    public function set($alias, $className);

    /**
     * @param $alias
     * return int
     */
    public function get($alias);

    public function has($alias);

    public function clear();
}