<?php

namespace TreeComponent\Factory;


use TreeComponent\Tree\TreeElement;

/**
 * Basic abstract factory for creating tree from any kind of objects
 *
 * Class AbstractTreeFactory
 * @author Petr Marochkin <petun911@gmail.com>
 */
abstract class AbstractTreeFactory
{
    /**
     * @param $data
     * @return TreeElement
     */
    public abstract function getTree($data);
}