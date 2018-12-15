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

use Slince\Shopify\Common\Model\Model;

class Metafield extends Model
{
    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $valueType;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $ownerId;

    /**
     * @var \DateTimeInterface
     */
    private $createdAt;

    /**
     * @var \DateTimeInterface
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $ownerResource;

    /**
     * @var string
     */
    private $adminGraphqlApiId;

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     * 
     * @return Metafield
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * 
     * @return Metafield
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        if ($this->valueType == 'integer') {
            return (int) $this->value;
        }
        
        return $this->value;
    }

    /**
     * @param string $value
     * 
     * @return Metafield
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * @param string $valueType
     * 
     * @return Metafield
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * 
     * @return Metafield
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     * 
     * @return Metafield
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     * 
     * @return Metafield
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     * 
     * @return Metafield
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerResource()
    {
        return $this->ownerResource;
    }

    /**
     * @param string $ownerResource
     * 
     * @return Metafield
     */
    public function setOwnerResource($ownerResource)
    {
        $this->ownerResource = $ownerResource;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId()
    {
        return $this->adminGraphqlApiId;
    }
    /**
     * @param string $adminGraphqlApiId
     * 
     * @return self
     */
    public function setAdminGraphqlApiId($adminGraphqlApiId)
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;

        return $this;
    }

}