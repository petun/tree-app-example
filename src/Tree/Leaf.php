<?php

namespace TreeComponent\Tree;


use TreeComponent\Renderer\RenderInterface;

/**
 * Class Leaf
 * @package TreeComponent\Tree
 * @author Petr Marochkin <petun911@gmail.com>
 */
class Leaf extends TreeElement
{

    public function getChildren()
    {
        // TODO: Implement getChildren() method.
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getLevel()
    {
        // TODO: Implement getLevel() method.
    }

    public function addElement(TreeElement $element)
    {
        // TODO: Implement addElement() method.
    }

    public function getParent()
    {
        // TODO: Implement getParent() method.
    }

    /**
     * @param $id
     * @return TreeElement
     */
    public function findElementById($id)
    {
        // TODO: Implement findElementById() method.
    }

    /**
     * Print tree, renders with current renderer
     * @param RenderInterface $interface
     * @return mixed
     */
    public function renderTree(RenderInterface $interface)
    {
        // TODO: Implement getTree() method.
    }

    /**
     * Print path to root element, renders with current renderer
     * @param RenderInterface $interface
     * @return mixed
     */
    public function renderPath(RenderInterface $interface)
    {
        // TODO: Implement getPath() method.
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        // TODO: Implement current() method.
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        // TODO: Implement next() method.
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        // TODO: Implement key() method.
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        // TODO: Implement valid() method.
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}