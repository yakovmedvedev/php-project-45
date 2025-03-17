#this's my first makefile
install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-even2:
	./bin/even

validate:
	composer validate

update:
	composer update

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

.PHONY: greet even-game game3
