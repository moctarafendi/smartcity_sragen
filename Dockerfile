FROM telkomindonesia/alpine:php-7.1-apache-novol

WORKDIR /var/www/data/html

COPY composer*.json ./

RUN composer install --no-scripts --no-autoloader

COPY . .

RUN mv .env.example .env

User root 

RUN mkdir -p /var/www/data/html/bootstrap/cache/ \ 
	&& chmod -R 775 /var/www/data/html/bootstrap/cache/ \
	&& mkdir -p /var/www/data/html/storage/app \
	/var/www/data/html/storage/logs \
	/var/www/data/html/storage/framework/sessions \
	/var/www/data/html/storage/framework/views \
	/var/www/data/html/storage/framework/cache \
	&& chmod -R 775 /var/www/data/html/storage/ \
	&& chown -R user /var/www/data/html

User user

RUN composer dump-autoload --optimize

ADD init.sh .

CMD ["/var/www/data/html/init.sh"]