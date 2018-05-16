# Forum website

This code contains the code for https://forum.sabayon.org

## Installation

`vagrant up` will install the basic requirements.
After it, you will have to do some manual steps.
**Don't pick those values on PRODUCTION!**
They are weak, because this is a throwaway development environment.

1. Open http://127.0.0.1:8080/phpBB3/install for phpBB3.
   Make sure you have everything needed in order to install it.
   As credentials, enter:
   1. server hostname: `localhost`
   1. server port: leave blank
   1. database name: `forum`
   1. database user: `php`
   1. database password: leave blank

1. Admin setup:
   1. username: `admin`
   1. password: `secret`
   1. email: `webmaster@forum.php`

## TODO

Copy over files of our installation to phpBB setup.
Try [privacypolicy extension](https://github.com/david63/david63-privacypolicy)
