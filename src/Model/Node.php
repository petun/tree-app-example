<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.07.2016
 * Time: 11:39
 */

namespace TreeComponent\Model;


class Node implements ITreeComposite
{
    /**
     * @var Node[]
     */
    protected $_children;

    /**
     * @var Node
     */
    protected $_parent;

    private $_id;

    private $_parentId;

    private $_name;

    /**
     * Node constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_id = $data['id'];
        $this->_name = $data['name'];
        $this->_parentId = $data['parent_id'];
    }


    function getList()
    {
        // TODO: Implement getList() method.
    }

    function getPath()
    {
        // TODO: Implement getPath() method.
    }

    function addChild(ITreeComposite $child)
    {
        $this->_children[$child->getId()] = $child;
    }

    function getId()
    {
        return $this->_id;
    }

    function getChildren()
    {
        return $this->_children;
    }

    function hasChildren()
    {
        return count($this->_children);
    }

    function getParent()
    {
        return $this->_parent;
    }

    function setParent(ITreeComposite $parent)
    {
        $this->_parent = $parent;
    }
}