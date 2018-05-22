#!/bin/sh
# Provisions the VM

apt-get -qq update
apt-get -qq install -y apache2 php postgresql postgresql-client unzip libapache2-mod-php7.0 php-xml

HTML_DOCUMENT_ROOT="/var/www/html"
PHPBB_ROOT_PATH="$HTML_DOCUMENT_ROOT/phpBB3"

DOWNLOAD_URL="https://download.phpbb.com/pub/release/3.0/3.0.14/phpBB-3.0.14.zip"
ZIP_FILE="`basename $DOWNLOAD_URL`"
INSTALLATION_PATH="/tmp"

# Download into a clean directory
cd "$INSTALLATION_PATH"
rm -rf "$INSTALLATION_PATH/phpBB*"
rm -rf "$PHPBB_ROOT_PATH"
wget -q "$DOWNLOAD_URL"

echo "Download complete. Copying files to target destination."
unzip -q -o "$ZIP_FILE" -d "$INSTALLATION_PATH"

cp -r "$INSTALLATION_PATH/phpBB3" "$HTML_DOCUMENT_ROOT"
# This should work, but fails for some reason
#id -u php &> /dev/null || adduser --disabled-password --gecos "" php
adduser --disabled-password --gecos "" php
chmod 666 "$PHPBB_ROOT_PATH/config.php"
chmod 777 "$PHPBB_ROOT_PATH/cache/"
chmod 777 "$PHPBB_ROOT_PATH/files/"
chmod 777 "$PHPBB_ROOT_PATH/store/"
chmod 777 "$PHPBB_ROOT_PATH/images/avatars/upload/"
chown -R php "$PHPBB_ROOT_PATH/"

echo "Files copied. Preparing database."
sed -i.bak s/peer/trust/g /etc/postgresql/9.5/main/pg_hba.conf
sudo -u postgres dropdb --if-exists forum
sudo -u postgres dropuser php
sudo -u postgres createuser -d -s php
sudo -u postgres createdb -O php forum

echo "Database ready. Restarting services in order to make changes take effect."
service apache2 reload
service postgresql restart

echo "You can visit http://127.0.0.1:8080/phpBB3/ now."
echo "After installation log into the VM and execute."
echo "sudo su -"
echo "cd /tmp"
echo "./scripts/after-install.sh"
