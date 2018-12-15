<?php

namespace Slince\Shopify\Tests\Metafield;

use Slince\Shopify\Manager\Metafield\Metafield;
use Slince\Shopify\Tests\Base\ModelTestCase;

class MetafieldTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Metafield::class;
    }
}