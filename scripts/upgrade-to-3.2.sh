#!/bin/sh
# Upgrades existing forum to latest version of 3.2 line

HTML_DOCUMENT_ROOT="/var/www/html"
PHPBB_ROOT_PATH="$HTML_DOCUMENT_ROOT/phpbb3"
BACKUP_ROOT_PATH="$HTML_DOCUMENT_ROOT/forum-backup"

DOWNLOAD_URL="https://www.phpbb.com/files/release/phpBB-3.2.2.zip"
ZIP_FILE="`basename $DOWNLOAD_URL`"
INSTALLATION_PATH="/tmp/"

# Download into a clean directory
cd "$INSTALLATION_PATH"
rm -rf "$INSTALLATION_PATH/phpBB*"
wget -q "$DOWNLOAD_URL"

echo "Download complete. Unpacking and preparing system for upgrade."
unzip -q -o "$ZIP_FILE" -d "$INSTALLATION_PATH"

# Follow download instructions
# c.f. https://www.phpbb.com/support/docs/en/3.0/kb/article/how-to-update-to-the-latest-version-of-phpbb3/
rm "$INSTALLATION_PATH/phpBB3/config.php"
rm -rf "$INSTALLATION_PATH/phpBB3/images"
rm -rf "$INSTALLATION_PATH/phpBB3/files"
rm -rf "$INSTALLATION_PATH/phpBB3/store"

# Instead of deciding what to keep, move everything to another place and restore
rm -rf "$BACKUP_ROOT_PATH"
mv "$PHPBB_ROOT_PATH" "$BACKUP_ROOT_PATH"
mkdir -p "$PHPBB_ROOT_PATH"
mkdir -p "$PHPBB_ROOT_PATH/images/avatars/"

# Restore what's needed for an upgrade
cp "$BACKUP_ROOT_PATH/config.php" "$PHPBB_ROOT_PATH"
cp -rf "$BACKUP_ROOT_PATH/images" "$PHPBB_ROOT_PATH"
cp -rf "$BACKUP_ROOT_PATH/files" "$PHPBB_ROOT_PATH"
cp -rf "$BACKUP_ROOT_PATH/store" "$PHPBB_ROOT_PATH"
cp -rf "$BACKUP_ROOT_PATH/images/avatars/upload" "$PHPBB_ROOT_PATH/images/avatars/"

# Copy files for update from download
cp -rf "$INSTALLATION_PATH/phpBB3/*" "$PHPBB_ROOT_PATH"
mkdir -p "$PHPBB_ROOT_PATH/cache"

# Set file and directory permissions
chown -R php:php "$PHPBB_ROOT_PATH"
chmod 777 "$PHPBB_ROOT_PATH/config.php"
chmod 777 "$PHPBB_ROOT_PATH/cache/"
chmod 777 "$PHPBB_ROOT_PATH/files/"
chmod 777 "$PHPBB_ROOT_PATH/store/"

echo "Please patch fix_user_styles.php line 42 before running the upgrade."
echo "See upgrade-to-3.2.sh for details"
echo "After upgrade restore the file permissions."
# See https://www.phpbb.com/community/viewtopic.php?p=14902921#p14902921
# Patch $PHPBB_ROOT_PATH/phpbb/db/migration/data/v32x/fix_user_styles.php:42
#
# BROKEN:
# $enabled_styles = $result->fetch_array();
# FIXED:
# $enabled_styles = $this->db->sql_fetchrowset($result);
