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

use Slince\Shopify\Common\Manager\GeneralCurdable;

class MetafieldManager extends GeneralCurdable implements MetafieldManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'metafields';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'metafield';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Metafield::class;
    }
}