<?php

namespace TreeComponent\Factory;


use TreeComponent\Model\ITreeComposite;

abstract class AbstractTreeFactory
{
    /**
     * @param $data
     * @return ITreeComposite
     */
    public abstract function getTree($data);
}