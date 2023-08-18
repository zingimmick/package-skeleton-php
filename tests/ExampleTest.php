<?php

declare(strict_types=1);

namespace Zing\Skeleton\Tests;

use Zing\Skeleton\Example;

/**
 * @internal
 */
final class ExampleTest extends TestCase
{
    public function testFoo(): void
    {
        $this->assertTrue(class_exists(Example::class));
        $this->assertTrue(method_exists(Example::class, 'foo'));
        $this->assertTrue((new Example())->foo());
    }
}
