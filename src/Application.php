<?php

namespace TreeComponent;

use TreeComponent\DI\Container;
use TreeComponent\DI\DIContainerInterface;
use TreeComponent\Factory\AbstractTreeFactory;
use TreeComponent\Renderer\RenderInterface;

/**
 * Class Application
 *
 * @package TreeComponent
 * @author Petr Marochkin <petun911@gmail.com>
 */
class Application
{

    const ALIAS_FACTORY = 'factory';

    const ALIAS_RENDERER = 'renderer';

    /**
     * @var DIContainerInterface
     */
    public static $container;

    /**
     * init configuration and set class map for DI container
     * @param array $config
     */
    public static function init(array $config)
    {
        static::$container = new Container();

        foreach ($config as $type => $className) {
            static::$container->set($type, $className);
        }
    }

    public static function getObject($type, $params = [])
    {
        return static::$container->get($type, $params);
    }

    /**
     * this is shortcut for getObject('factory')
     * @param array $params
     * @return AbstractTreeFactory
     */
    public static function factory($params = []) {
        return static::getObject(self::ALIAS_FACTORY, $params);
    }

    /**
     * this is shortcut for getObject('renderer')
     * @param array $params
     * @return RenderInterface
     */
    public static function renderer($params = []) {
        return static::getObject(self::ALIAS_RENDERER, $params);
    }

}