<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.07.2016
 * Time: 11:40
 */

namespace TreeComponent\Model;


interface ITreeComposite
{
    function getId();

    function setParent(ITreeComposite $parent);

    function getParent();

    function getChildren();

    function hasChildren();

    function getList();

    function getPath();

    function addChild(ITreeComposite $child);
}