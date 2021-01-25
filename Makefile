#!/usr/bin/make -f
APP=web

build:
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down --remove-orphans

restart:
	docker-compose down
	docker-compose up -d

migrate:
	docker-compose run --rm ${APP} php artisan migrate --seed

jumpin:
	docker-compose exec ${APP} bash

test:
	docker-compose exec ${APP} php artisan config:clear
	docker-compose exec ${APP} ./vendor/bin/phpunit ./tests/

tail-logs:
	docker-compose logs -f ${APP}
