name ?= Default

# OSP
about:
	php artisan about

key-generate:
	php artisan key:generate

ide-helper:
	php artisan ide-helper:generate

test:
	php artisan test --coverage

logs:
	php artisan pail

docs:
	php artisan swagger:generate

migrate:
	php artisan migrate
seed:
	php artisan db:seed
db-reset:
	php artisan migrate:reset

model:
	php artisan make:model -f -m -s --force $(model)

endpoint:
	php artisan make:controller API/v1/$(name)Controller -m$(model) -R --api --phpunit --force

request:
	php artisan make:request $(name)Request --force

route-list:
	php artisan route:list

clear:
	php artisan optimize:clear


# Docker
docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-build:
	docker-compose build

docker-ps:
	docker-compose ps

docker-logs:
	docker-compose logs app && docker-compose logs webserver

composer-install:
	docker-compose exec app composer install

composer-update:
	docker-compose exec app composer update

npm-install:
	docker-compose exec app npm install

exec-sh:
	docker-compose exec app sh

exec-chmod:
	docker-compose exec app chmod -R 777 storage bootstrap/cache

exec-about:
	php artisan about

exec-key-generate:
	php artisan key:generate

exec-migrate:
	docker-compose exec app php artisan migrate

exec-seed:
	docker-compose exec app php artisan db:seed

exec-db-reset:
	docker-compose exec app php artisan migrate:reset

exec-test:
	docker-compose exec app php artisan test --coverage

exec-logs:
	docker-compose exec app php artisan pail

exec-docs:
	php artisan swagger:generate
