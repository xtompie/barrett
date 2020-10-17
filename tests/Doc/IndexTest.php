<?php

namespace Tests\Doc;

class IndexTest extends AbstractTest
{

    public function testDefault()
    {
        $duplex = DuplexFactory::factory('/wiki/Nikola_Tesla');
        $this->assertTitle($duplex);
        $this->assertOgImage($duplex);
    }

    public function testList()
    {
        $robots = CrawlerFactory::factory('https://www.wp.pl/')->robots();
        $this->assertSame($robots, 'follow, index');
    }

    public function testDetail()
    {
        $urls = CrawlerFactory::factoryA('/wiki/Php')->aHrefStartWith('/');

        $url = $urls
            ->eq(12)
            ->attr('href')
        ;

        $duplex = DuplexFactory::factory($url);
        $this->assertTitle($duplex);
    }

}
