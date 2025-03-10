1.PHP последн. версии
2.Composer глобально
3.Склонировать репо php-project-45 (локально можно переименовать)
4.Инициализация composer init. имя пакета - hexlet/code.
5.Создать bin/brain-games.php. Чтобы brain-games.php выводил на экран строку:
php bin/brain-games.php
Welcome to the Brain Games!

6.Создайте Makefile с командой install, выполняющей composer install
7.Добавьте директорию vendor в файл .gitignore.
8.Добавьте в Makefile команду brain-games: php bin/brain-games.php
9.Переименуйте файл brain-games.php в brain-games.
10.Пропишите в начале файла brain-games шебанг с правильно указанным интерпретатором (php) — #!/usr/bin/env php.
11.Добавьте запись в секцию bin в composer.json:
"bin": [
  "bin/brain-games"
] - благодаря этой строчке пакет будет выполняться как программа brain-games
12.bin/brain-games права на исполнение - chmod +x bin/brain-games
13.Измените команду brain-games в Makefile: ./bin/brain-games
14.в Makefile команду validate, которая выполнит composer validate

