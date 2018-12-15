<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Metafield;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface MetafieldManagerInterface extends ManagerInterface
{
    /**
     * Retrieves a list of metafields that belong to a resource.
     * 
     * @param array $query
     * 
     * @return Metafield[]
     */
    public function findAll(array $query = []);

    /**
     * Retrieves a single metafield from a resource by its ID.
     * 
     * @param array $data
     * 
     * @return Metafield
     */
    public function find($id);

    /**
     * Retrieves a count of a resource's metafields.
     * 
     * @return integer
     */
    public function count();

    /**
     * Creates a new metafield for a resource.
     * 
     * @param array $data
     * 
     * @return Metafield
     */
    public function create(array $data);

    /**
     * Updates a metafield.
     * 
     * @param integer $id
     * @param array $data
     * 
     * @return Metafield
     */
    public function update($id, array $data);

    /**
     * Deletes a metafield by its ID.
     * 
     * @param integer $id
     */
    public function remove($id);
}