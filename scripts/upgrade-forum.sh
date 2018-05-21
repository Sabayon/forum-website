#!/bin/sh
# Downloads, unpacks and moves the needed files for an phpBB3 upgrade.

PHP_ROOT_DIR="/var/www/html/phpBB3"
DOWNLOAD_URL="$1"
ZIP_FILE=`basename $DOWNLOAD_URL`

cd /tmp
rm -rf phpBB*

wget -q "$DOWNLOAD_URL"
unzip -q -o "$ZIP_FILE" -d .

rm phpBB3/config.php
rm -r phpBB3/images/
rm -r phpBB3/store/
rm -r phpBB3/files/

rm -rf "$PHP_ROOT_DIR/vendor/"
rm -rf "$PHP_ROOT_DIR/cache/"

cp -rf phpBB3 "$PHP_ROOT_DIR"
mkdir -p "$PHP_ROOT_DIR/cache/"

chown -R php:php "$PHP_ROOT_DIR"
chmod 640 "$PHP_ROOT_DIR/config.php"
chmod 777 "$PHP_ROOT_DIR/cache/"
