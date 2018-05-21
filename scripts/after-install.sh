#!/bin/sh
# Moves the installation directory after setup so the forum becomes available

SABAYON_FORUM=/tmp/html
PHP_ROOT_DIR="/var/www/html/phpBB3"

# FIXME: Needs to be run on the VM by user php
cd "$PHP_ROOT_DIR"
mkdir -p old
mv install/ old/

# Copy over Sabayon specific adjustments
cp $SABAYON_FORUM/clear.php .
cp $SABAYON_FORUM/data_global.php .
cp $SABAYON_FORUM/favicon.ico .
cp $SABAYON_FORUM/functions.php .
cp $SABAYON_FORUM/get_langpacks.sh .
cp -r $SABAYON_FORUM/images/smilies/*.gif ./images/smilies/
cp -r $SABAYON_FORUM/language/* ./language/
cp -r $SABAYON_FORUM/styles/* ./styles/

# Granting 777 is bad, but there were logs in apache2's error.log file regarding permission denied
chmod 777 "$PHP_ROOT_DIR/config.php"
