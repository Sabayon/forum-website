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

1. After installation, run the script `after-install.sh`.
1. Login to the admin interface (click on `Administration Control Panel` at the bottom)
   and navigate to the tab Styles.
   From there you need to install the styles.

## TODO

- Find a way to expose the scripts folder in the VM
- Try [privacypolicy extension](https://github.com/david63/david63-privacypolicy)
- Mods reached there end of life and need to be ported to extensions.
