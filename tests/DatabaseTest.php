<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class DatabaseTest extends TestCase
{
    public function testGetCurrentGreedFearIndex(): void 
    {
        /**
         * Tests if getCurrentGreedFearIndex returns an integer
         */
        $database = new CNTRX\Database();
        $currentIndex = $database->getCurrentGreedFearIndex();
        $this->assertTrue(gettype($currentIndex) === "integer");
    }

    public function testSetCurrentGreedFearIndex() {
        /**
         * Sets Value
         * Scrapes the Value
         * asserts if the current Database Value equals to the scraped value
         */
        $database = new CNTRX\Database();
        $database->setCurrentGreedFearIndex();

        $scrape = CNTRX\GreedFearIndex::scrapeCurrentGreadFearIndex();

        $currentIndex = $database->getCurrentGreedFearIndex();

        $this->assertTrue($scrape === $currentIndex);
    }

}