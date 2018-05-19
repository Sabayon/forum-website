#!/bin/sh
# Upgrades existing forum to latest version

DOWNLOAD_URL="https://download.phpbb.com/pub/release/3.1/3.1.4/phpBB-3.0.14_to_3.1.4.zip"
PHP_ROOT_DIR="/var/www/html/phpBB3"

cd /tmp
rm -rf phpBB*

wget -q "$DOWNLOAD_URL"
unzip -q -o phpBB-3.0.14_to_3.1.12.zip -d phpBB3

rm -rf "$PHP_ROOT_DIR/vendor/"
rm -rf "$PHP_ROOT_DIR/cache/"

mkdir "$PHP_ROOT_DIR/to-reinstall"
mv "$PHP_ROOT_DIR/language/" "$PHP_ROOT_DIR/to-reinstall/"
mv "$PHP_ROOT_DIR/styles/" "$PHP_ROOT_DIR/to-reinstall/"

mkdir -p "$PHP_ROOT_DIR/language/en/"
mkdir -p "$PHP_ROOT_DIR/styles/"
mkdir "$PHP_ROOT_DIR/cache/"
chmod 777 "$PHP_ROOT_DIR/cache/"

mv "$PHP_ROOT_DIR/to-reinstall/language/en/" "$PHP_ROOT_DIR/language/"
mv "$PHP_ROOT_DIR/to-reinstall/styles/prosilver/" "$PHP_ROOT_DIR/styles/"
cp -rf phpBB3 "$PHP_ROOT_DIR"

chown -R php:php "$PHP_ROOT_DIR"
chmod 640 "$PHP_ROOT_DIR/config.php"
