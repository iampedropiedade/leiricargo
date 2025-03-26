build:
	docker compose build

start:
	docker compose up -d

stop:
	docker stop leiricargo_app
	docker stop leiricargo_db

stop-app:
	docker stop leiricargo_app

fix:
	docker run --entrypoint "" --rm -it -v $(CURDIR)/public:/var/www/html -v $(CURDIR)/phpcs.xml:/var/www/html/phpcs.xml php:8.2-apache bash -c "cd /var/www/html && php vendor/bin/phpcbf"

stan:
	docker run --entrypoint "" --rm -it -v $(CURDIR)/phpstan.neon:/var/www/html/phpstan.neon -v $(CURDIR)/app:/var/www/html php:8.2-apache bash -c "cd /var/www/html && php vendor/bin/phpstan analyse"

phpcs:
	docker run --entrypoint "" --rm -it -v $(CURDIR)/phpcs.xml:/var/www/html/phpcs.xml -v $(CURDIR)/app:/var/www/html php:8.2-apache bash -c "cd /var/www/html && php vendor/bin/phpcs"

bash:
	docker exec -it leiricargo_app bash

bash-db:
	docker exec -it leiricargo_db bash

open:
	open http://localhost:8121/

compile-ui:
	docker run --rm -it -v $(CURDIR):/src/ node:22 bash -c "cd /src/ui && yarn install && yarn production"

composer:
	docker exec -it --user www-data leiricargo_app sh -c "cd /var/www/html && composer install"

doctrine:
	docker exec -it --user www-data leiricargo_app sh -c "/var/www/html/concrete/bin/concrete5 orm:generate:proxies"

clear-cache:
	docker exec -it --user www-data leiricargo_app sh -c "/var/www/html/concrete/bin/concrete5 c5:clear-cache"

permissions:
	$(MAKE) permissions-web
	$(MAKE) permissions-files
	$(MAKE) permissions-config
	$(MAKE) permissions-cache
	$(MAKE) permissions-sitemap

deploy:
	$(MAKE) git-pull
	$(MAKE) build
	$(MAKE) stop-app
	$(MAKE) start
	$(MAKE) permissions
	$(MAKE) doctrine
