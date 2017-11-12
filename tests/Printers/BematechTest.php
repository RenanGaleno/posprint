<?php

namespace Posprint\Tests\Printers;

/**
 * Unit Tests for Bematech Class
 *
 * @author Roberto L. Machado <linux dot rlm at gmail dot com>
 */

use Posprint\Printers\Bematech;
use PHPUnit\Framework\TestCase;

class BematechTest extends TestCase
{
    public function testInitialize()
    {
        $printer = new Bematech();
        $this->assertInstanceOf(Bematech::class, $printer);
    }
}
