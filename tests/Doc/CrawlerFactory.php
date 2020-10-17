<?php

namespace Tests\Doc;

use Goutte\Client;

class CrawlerFactory
{

    protected static function path($path)
    {
        // strip host and scheme
        $path = parse_url($path);
        $path = $path['path'] . (isset($path['query']) ? '?'. $path['query'] : '');

        return $path;
    }

    /**
     * @param string $path
     * @return Crawler
     */
    public static function factory($url)
    {
        $baseCrawler = (new Client())->request('GET', $url);

        return new Crawler($baseCrawler->getNode(0), $baseCrawler->getUri(), $baseCrawler->getBaseHref());
    }

    /**
     * @param string $path
     * @return Crawler
     */
    public static function factoryA($path)
    {
        return  static::factory(env('A') . self::path($path));
    }

    /**
     * @param string $path
     * @return Crawler
     */
    public static function factoryB($path)
    {
        return  static::factory(env('B') . self::path($path));
    }

}
