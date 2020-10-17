<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Tests\Doc\CrawlerFactory;

class TestCrawlerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:crawler';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        dump(CrawlerFactory::factory('https://en.wikipedia.org')->title());

        return 0;
    }

}
