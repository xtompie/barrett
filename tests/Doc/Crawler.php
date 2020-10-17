<?php

// https://symfony.com/doc/current/components/dom_crawler.html

namespace Tests\Doc;

use Symfony\Component\DomCrawler\Crawler as BaseCrawler;
use Illuminate\Support\Str;

class Crawler extends BaseCrawler
{

    public function title()
    {
        return $this
            ->filter('title')
            ->first()
            ->text()
        ;
    }

    public function robots()
    {
        return $this
            ->filter('meta')
            ->reduce(function (Crawler $node, $i) {
                return $node->attr('name') == 'robots';
            })
            ->first()
            ->attr('content')
        ;
    }

    public function ogImage()
    {
        return $this
            ->filter('meta')
            ->reduce(function (Crawler $node, $i) {
                return $node->attr('property') == 'og:image';
            })
            ->first()
            ->attr('content')
        ;
    }

    public function aHrefStartWith($needles)
    {
        return $this
            ->filter('a')
            ->reduce(function (Crawler $node, $i) use ($needles) {
                return Str::startsWith($node->attr('href'), $needles);
            })
        ;
    }

}
