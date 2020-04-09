# testunitaire

docker-compose up -d
docker-compose exec web composer install
docker-compose exec web ./vendor/bin/phpunit tests