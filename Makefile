name ?= Default

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
