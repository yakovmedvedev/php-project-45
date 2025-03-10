#this's my first makefile
install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate

update:
	composer update

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
