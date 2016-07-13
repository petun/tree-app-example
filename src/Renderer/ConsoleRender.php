<?php

namespace TreeComponent\Renderer;


use TreeComponent\Tree\TreeElement;

/**
 *
 * Class ConsoleRender
 * @package TreeComponent\Renderer
 * @author Petr Marochkin <petun911@gmail.com>
 */
class ConsoleRender implements RenderInterface
{
    function render(TreeElement $item)
    {
        echo $item->getLevel() . $item->getName() . "\n";
    }
}