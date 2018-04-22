docker-compose up -d && docker exec -ti php-fpm sh -c "cd /var/www/zoo/ && ./composer.phar dumpautoload"
