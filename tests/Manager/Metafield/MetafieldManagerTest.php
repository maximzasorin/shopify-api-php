<?php

namespace Slince\Shopify\Tests\Metafield;

use Slince\Shopify\Manager\Metafield\MetafieldManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class MetafieldManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Metafield';
    }

    public function getServiceClass()
    {
        return MetafieldManager::class;
    }

    public function testCreate()
    {
        $this->markTestSkipped();
    }

    public function testUpdate()
    {
        $this->markTestSkipped();
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }
}