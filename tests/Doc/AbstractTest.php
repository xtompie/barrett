<?php

namespace Tests\Doc;

use Tests\TestCase;


abstract class AbstractTest extends TestCase
{

    protected function assertDuplex(Duplex $duplex, \Closure $value)
    {
        $uriA = $duplex->a()->getUri();
        $uriB = $duplex->b()->getUri();
        $valueA = $value($duplex->a());
        $valueB = $value($duplex->b());

        $this->assertIsString($valueA, implode("\n", [
            "a: {$uriA}",
            "a: {$valueA}",
        ]));

        $this->assertIsString($valueB, implode("\n", [
            "b: {$uriB}",
            "b: {$valueB}",
        ]));

        $this->assertSame(
            $valueA,
            $valueB,
            implode("\n", [
                "a: {$uriA}",
                "b: {$uriB}",
                "a: {$valueA}",
                "b: {$valueB}",
            ])
        );
    }

    protected function assertTitle(Duplex $duplex)
    {
        $this->assertDuplex($duplex, function(Crawler $crawler) { return $crawler->title(); });
    }

    protected function assertOgImage(Duplex $duplex)
    {
        $this->assertDuplex($duplex, function(Crawler $crawler) { return $crawler->ogImage(); });
    }

    protected function assertRobots(Duplex $duplex)
    {
        $this->assertDuplex($duplex, function(Crawler $crawler) { return  $crawler->robots(); });
    }

}
