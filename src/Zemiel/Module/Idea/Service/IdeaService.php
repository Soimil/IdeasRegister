<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/3/15
 * Time: 10:36 PM
 */

namespace Zemiel\Module\Idea\Service;

use Zemiel\Service\AbstractService;

class IdeaService extends AbstractService
{
    const SERVICE_NAME = 'IdeaService';

    /**
     * getting service name
     *
     * @return string
     */
    public function getName()
    {
        return self::SERVICE_NAME;
    }

    /**
     * getting Idea by id
     *
     * @param integer $ideaId
     */
    public function getById($ideaId)
    {

    }

    /**
     * getting all Ideas objects
     */
    public function findAll()
    {

    }

    /**
     * getting Ideas by params [column => value]
     *
     * @param array $params
     */
    public function findBy(array $params)
    {

    }

    /**
     * insert new Idea object
     *
     * @param object $idea
     */
    public function insert($idea)
    {

    }

    /**
     * update Idea object
     *
     * @param object $idea
     */
    public function update($idea)
    {

    }

    /**
     * deleting Idea object
     *
     * @param integer $ideaId
     */
    public function delete($ideaId)
    {

    }


}