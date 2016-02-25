<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 2/25/16
 * Time: 9:30 PM
 */

namespace Zemiel\Request;


class Request
{
    private $order;
    private $limit;
    private $sort;
    private $fields;

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     * @return Request
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param mixed $fields
     * @return Request
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sort
     * @return Request
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param mixed $limit
     * @return Request
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }


}