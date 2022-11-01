# Installation
1. get the latest changes
   1. clone project from [gitlab](https://gitlab2.voxteneo.com/drupal/csem)
   1. switch to dev branch
1. setup database
   1. create database
   1. import [the inital database](website/db.sql.gz)
1. pull 3rd party codes
   1. move to folder `/website`
   1. set php *memory_limit* to `2G` or more
   1. `composer install`
   1. reset the php *memory_limit*
   1. `vendor/bin/drush cc plugin`
   1. `vendor/bin/drush cr`
   1. `npm install`
   1. `npm run dev`
1. setup configurations
   1. move to folder `/website/web/sites/default`
   1. copy `default.settings.env.php` to `settings.env.php`
   1. update the database connection as necessary
   1. copy `default.services.yml` to `services.yml`
   1. set value `twig.config: debug` to `true`
1. import config
   1. move to folder `/website`
   1. `vendor/bin/drush cim -y`
   1. `vendor/bin/drush cr`
