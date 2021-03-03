FROM debian:buster
MAINTAINER masai <grats420@gmail.com>

RUN mkdir -p /var/www 	
WORKDIR /var/www/

RUN sed -i '/security/d' /etc/apt/sources.list

RUN apt update; \
	apt install -y \
	default-mysql-server \
	wget\
	nginx\
	php7.3-mysql php7.3-fpm	php7.3-mbstring php7.3-xml php7.3-simplexml php7.3-xmlwriter

#phpmyadmin 
RUN wget -qO pma.tar.gz https://files.phpmyadmin.net/phpMyAdmin/5.1.0-rc2/phpMyAdmin-5.1.0-rc2-all-languages.tar.gz &&\
	tar xzf pma.tar.gz -C html/ && rm -rf pma.tar.gz

#Wordpress
RUN wget -q https://wordpress.org/latest.tar.gz &&\
	tar xzf latest.tar.gz -C html/ && rm -rf latest.tar.gz

#nginx
COPY ./srcs .
RUN mv nginx/default /etc/nginx/sites-available/ &&\
	mv wordpress/wp-config.php /var/www/html/wordpress &&\
	rm -rf wordpress nginx 

CMD 	./init.sh 
