USER = $(shell whoami)
CURRENT = $(shell pwd)
TARGET = /var/www/html

echo:
		@echo 'hoge'

composer:
		@composer update

install:
		@sudo rm -rf /var/www/html/wp-content/themes/swag-themes-$(USER)
		@sudo cp -r ./swag-themes /var/www/html/wp-content/themes/swag-themes-$(USER)
		@sudo cp ./swag-themes/style.css.$(USER) /var/www/html/wp-content/themes/swag-themes-$(USER)/style.css
