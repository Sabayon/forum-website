#!/bin/sh
# Upgrades existing forum to latest version of 3.2 line

CWD=`pwd`
DOWNLOAD_URL="https://www.phpbb.com/files/release/phpBB-3.2.2.zip"

sh -c "$CWD/scripts/upgrade-forum.sh $DOWNLOAD_URL"
