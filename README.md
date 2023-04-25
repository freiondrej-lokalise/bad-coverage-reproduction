# bad-coverage-reproduction

## Reproduction
```shell
docker compose up -d
docker compose exec php bash
composer install
php -dxdebug.mode=coverage /var/www/html/app/vendor/phpunit/phpunit/phpunit --coverage-clover /var/www/html/app/tests/coverage/coverage.xml --filter ReproductionTest --test-suffix ReproductionTest.php /var/www/html/app/tests --teamcity
```

In the generated `tests/coverage/coverage.xml`, we can see that lines 12 and 24 are marked as covered, even though it is impossible.
