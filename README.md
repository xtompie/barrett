# Barrett

Cli tool for comparing website between two releases

## Requirments

- php 7.4

## Install 

- run `composer install`
- run `cp .env.example .env`
- set `A` and `B`  in `.env` file

## Usage

- run `php vendor/bin/phpunit tests/Doc/` - run all tests in direcotry
- run `php vendor/bin/phpunit tests/Doc/IndexTest.php` - run all test in one test case
- run `php vendor/bin/phpunit --filter testDefault tests/Doc/IndexTest.php` - run one test

## Crawler devlop

- doc https://symfony.com/doc/current/components/dom_crawler.html
- run `php artisan test:crawler` - for testing crawler methods (`App\Console\Commands\TestCrawlerCommand`)
