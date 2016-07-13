<?php


namespace TreeComponent\Renderer;

use TreeComponent\Tree\TreeElement;

/**
 * Interface gives only one basic method for rendering tree element with different ways, like console, html, csv and others.
 *
 * Interface RenderInterface
 * @package TreeComponent\Renderer
 * @author Petr Marochkin <petun911@gmail.com>
 */
interface RenderInterface
{
    function render(TreeElement $item);
}