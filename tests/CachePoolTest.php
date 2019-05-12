<?php
declare(strict_types=1);
namespace PoP\SymfonyEngine;

use PoP\Engine\Facades\PersistentCacheItemPool;
use PoP\Engine\Facades\RequestCacheItemPool;

class CachePoolTestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that the cache returns the same set value
     */
    public function testPersistentCacheItemPool(): void
    {
        $cacheitempool = PersistentCacheItemPool::getInstance();
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
        $cacheitempool = RequestCacheItemPool::getInstance();
        $cacheitem = $cacheitempool->getItem('foo');
        $cacheitem->set('bar');
        $this->assertEquals(
            'bar',
            $cacheitem->get()
        );
    }
}
