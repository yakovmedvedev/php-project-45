#this's my first makefile
install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd
	
brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime

validate:
	composer validate

update:
	composer update

lint:
	vendor/bin/phpstan analyse
	composer exec --verbose phpcs -- --standard=PSR12 --colors src bin

.PHONY: brain-games brain-even brain-calc brain-gcd brain-progression brain-prime
