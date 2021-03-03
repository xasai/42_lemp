#!/bin/sh

service mysql start 
mysql -u root << _EOF_
	CREATE DATABASE wordpress CHARACTER SET UTF8 COLLATE UTF8_BIN;
	CREATE USER 'wproot'@'localhost' IDENTIFIED by 'toor';
	GRANT ALL PRIVILEGES ON wordpress.* TO 'wproot'@'localhost'; 
	FLUSH PRIVILEGES;
_EOF_

openssl req -x509 -nodes -days 365 \
    -subj  "/C=RU/ST=QC/O=Company Inc/CN=127.0.0.1" \
     -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key \
     -out /etc/ssl/certs/nginx-selfsigned.crt;
service php7.3-fpm start
#rm -rf init.sh
nginx -g "daemon off;"
