<?php

declare(strict_types=1);

namespace tests;

require_once __DIR__ . '/../src/reproduction.php';

class ReproductionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public function testReproduction()
    {
        getByFilename();
        getByFilename2();
    }
}
