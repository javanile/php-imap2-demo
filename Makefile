
demo1:
	@php -f demo/demo1.php

docker-install:
	@docker-compose run --rm demo rm -rf vendor composer.lock
	@docker-compose run --rm demo composer install
	@docker-compose run --rm demo chmod 777 -R vendor composer.lock

docker-update:
	@docker-compose run --rm demo composer update

docker-demo1:
	@docker-compose run --rm demo php -f demo/demo1.php
