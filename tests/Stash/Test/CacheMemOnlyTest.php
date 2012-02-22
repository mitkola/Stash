<?php

/*
 * This file is part of the Stash package.
 *
 * (c) Robert Hafner <tedivm@tedivm.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Stash\Test;

use Stash\Cache;

/**
 * @package Stash
 * @author  Robert Hafner <tedivm@tedivm.com>
 */
class CacheMemOnlyTest extends AbstractCacheTest
{

    public function testConstruct()
    {
        $stash = new Cache(null, '_memTest');
        $this->assertTrue(is_a($stash, 'Stash\Cache'), 'Test object is an instance of Stash');
        return $stash;
    }

    public function testInvalidation()
    {
        // the request only version does not have stampede protection, since it can only do one thing at a time anyways
    }

}