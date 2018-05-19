#!/bin/sh
# Upgrades existing forum to latest version

DOWNLOAD_URL="https://www.phpbb.com/files/release/phpBB-3.2.2.zip"

cd /tmp
rm -rf phpBB*

wget -q "$DOWNLOAD_URL"
unzip -q -o phpBB-3.2.2.zip

rm phpBB3/config.php
rm -r phpBB3/images/
rm -r phpBB3/store/
rm -r phpBB3/files/

rm -rf /var/www/html/phpBB3/vendor/
rm -rf /var/www/html/phpBB3/cache/

cp -rf phpBB3 /var/www/html/phpBB3/
