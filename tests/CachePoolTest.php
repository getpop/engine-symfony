<?php
declare(strict_types=1);
namespace PoP\SymfonyEngine;

use PoP\ComponentModel\Facades\PersistentCacheItemPoolFacade;
use PoP\ComponentModel\Facades\MemoryManagerItemPoolFacade;

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
    public function testMemoryManagerItemPool(): void
    {
        $memoryitempool = MemoryManagerItemPoolFacade::getInstance();
        $memoryitem = $memoryitempool->getItem('foo');
        $memoryitem->set('bar');
        $this->assertEquals(
            'bar',
            $memoryitem->get()
        );
    }
}
