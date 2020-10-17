<?php

namespace Tests\Doc;

class Duplex
{

    /**
     * @var Crawler
     */
    protected $a;

    /**
     * @var Crawler
     */
    protected $b;


    public function __construct(Crawler $a, Crawler $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    /**
     * @return Crawler
     */
    public function a()
    {
        return $this->a;
    }

    /**
     * @return Crawler
     */
    public function b()
    {
        return $this->b;
    }

}
