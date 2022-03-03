# Laravel 9


```bash
sudo docker-compose up -d --build # pc local

apk update # php container

apk add composer # php container

composer global require laravel/installer # php container

/root/.composer/vendor/bin/laravel new l9 # php container

sudo cp -r l9/* . # pc local

sudo rm -rf l9/ # pc local

sudo docker exec -it laravel9_nginx_1 sh # pc local

chmod -R 777 /var/www/html/storage/ # nginx container

sudo docker inspect [CONTAINER ID] | grep IP # pc local, pega o ip do container mysql
# precisa adicionar o IP do container mysql no .env do Laravel no DB_HOST

sudo docker stop $(sudo docker ps -a -q) # pc local, parar todos os containers

php artisan key:generate # php container

php artisan config:cache # php container

php artisan make:factory PostFactory

php artisan tinker

\App\Models\Comment::factory(10)->create(); # run inside tinker to build dummy data in the database

apk add gcc g++ make libffi-dev openssl-dev # php container, required to install xdebug

pecl install xdebug # php container

php --ini # php container, shows where is the ini file

nano /usr/local/etc/php/conf.d/99-xdebug.ini # php container, buid xdebug ini file
# inside, put zend_extension=xdebug

docker restart [CONTAINER ID] # pc local

XDEBUG_MODE=coverage php artisan test --coverage # php container, to run test with xdebug
```