<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class GreedFearIndexTest extends TestCase
{
    public function testScrapeCurrentGreadFearIndex(): void
    {
        /**
         * Tests if scrapeCurrentGreadFearIndex returns an integer
         */
        $int = CNTRX\GreedFearIndex::scrapeCurrentGreadFearIndex();

        $this->assertTrue(gettype($int) === "integer");
    }
}