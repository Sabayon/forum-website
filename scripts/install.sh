#!/bin/sh
# Provisions the VM
apt-get -qq update
apt-get -qq install -y apache2 php postgresql postgresql-client unzip libapache2-mod-php7.0 phppgadmin php-xml

cd /tmp
rm -rf phpBB*
rm -rf /var/www/html/phpBB3

wget -q https://download.phpbb.com/pub/release/3.0/3.0.14/phpBB-3.0.14.zip 
unzip -q -o phpBB-3.0.14.zip

cp -r phpBB3 /var/www/html/
chmod 666 /var/www/html/phpBB3/config.php
chmod 777 /var/www/html/phpBB3/cache/
chmod 777 /var/www/html/phpBB3/files/
chmod 777 /var/www/html/phpBB3/store/
chmod 777 /var/www/html/phpBB3/images/avatars/upload/
chown -R php:root /var/www/html/phpBB3/

id -u php &> /dev/null || adduser --disabled-password --gecos "" php
sed -i.bak s/peer/trust/g /etc/postgresql/9.5/main/pg_hba.conf
sudo -u postgres dropdb --if-exists forum
sudo -u postgres dropuser php
sudo -u postgres createuser -d -s php
sudo -u postgres createdb -O php forum
a2enconf phppgadmin
service apache2 reload
service postgresql restart
