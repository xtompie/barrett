<?php

namespace Tests\Doc;

class DuplexFactory
{

    /**
     * Create duplex
     *
     * @param string $path
     * @return Duplex
     */
    public static function factory($path)
    {
        return new Duplex(
            CrawlerFactory::factoryA($path),
            CrawlerFactory::factoryB($path),
        );
    }


}
