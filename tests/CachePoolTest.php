<?php
declare(strict_types=1);
namespace PoP\SymfonyEngine;

use PoP\ComponentModel\Facades\PersistentCacheItemPoolFacade;
use PoP\ComponentModel\Facades\RequestCacheItemPoolFacade;

class CachePoolTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that the cache returns the same set value
     */
    public function testPersistentCacheItemPool(): void
    {
        $cacheitempool = PersistentCacheItemPoolFacade::getInstance();
        $cacheitem = $cacheitempool->getItem('foo');
        $cacheitem->set('bar');
        $this->assertEquals(
            'bar',
            $cacheitem->get()
        );
    }

    /**
     * Test that the cache returns the same set value
     */
    public function testRequestCacheItemPool(): void
    {
        $cacheitempool = RequestCacheItemPoolFacade::getInstance();
        $cacheitem = $cacheitempool->getItem('foo');
        $cacheitem->set('bar');
        $this->assertEquals(
            'bar',
            $cacheitem->get()
        );
    }
}
