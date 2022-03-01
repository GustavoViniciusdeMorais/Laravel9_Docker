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
```