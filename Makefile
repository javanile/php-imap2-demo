
demo1:
	@php -f demo/demo1.php

install:
	@docker-compose run --rm imap1 rm -rf vendor composer.lock
	@docker-compose run --rm imap1 composer install
	@docker-compose run --rm imap1 chmod 777 -R vendor composer.lock

update:
	@docker-compose run --rm imap1 composer update

imap1-demo1:
	@docker-compose run --rm imap1 php -f demo/demo1.php

imap2-demo1:
	@docker-compose run --rm imap2 php -f demo/demo1.php
