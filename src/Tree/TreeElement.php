<?php

namespace TreeComponent\Tree;

use TreeComponent\Renderer\RenderInterface;

/**
 * Class TreeElement
 * @package TreeComponent\Tree
 *
 */
abstract class TreeElement implements \Iterator
{
    public abstract function getChildren();

    public abstract function getName();

    public abstract function getId();

    public abstract function getParent();

    public abstract function getLevel();

    public abstract function addElement(TreeElement $element);

    /**
     * @param $id
     * @return TreeElement
     */
    public abstract function findElementById($id);

    /**
     * Print tree, renders with current renderer
     * @param RenderInterface $interface
     * @return mixed
     */
    public abstract function renderTree(RenderInterface $interface);


    /**
     * Print path to root element, renders with current renderer
     * @param RenderInterface $interface
     * @return mixed
     */
    public abstract function renderPath(RenderInterface $interface);

}