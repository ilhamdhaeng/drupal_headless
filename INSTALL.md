# Installation
1. get the latest changes
   1. clone project from [github](https://github.com/ilhamdhaeng/drupal_headless)
   1. switch to dev branch
1. setup database
   1. create database
   1. import [the inital database](db.sql.zip)
1. pull 3rd party codes
   1. cd to `project root`
   1. set php *memory_limit* to `2G` or more
   1. `composer install`
   1. reset the php *memory_limit*
   1. `vendor/bin/drush cc plugin`
   1. `vendor/bin/drush cr`
1. setup configurations
   1. cd to folder `/web/sites/default`
   1. copy `default.settings.env.php` to `settings.env.php`
   1. update the database connection as necessary
   1. copy `default.services.yml` to `services.yml`
   1. set value `twig.config: debug` to `true`
1. import config
   1. cd to folder `project root`
   1. `vendor/bin/drush cim -y`
   1. `vendor/bin/drush cr`
1. enable redis cache (optional)
   1. install redis-server & php-redis on your web server
   1. start redis-server
   1. enable redis drupal module
   1. Add following to the `settings.php` or `settings.env.php`
   1. $settings['redis.connection']['interface'] = 'PhpRedis';
   1. $settings['redis.connection']['host'] = 'localhost';
   1. $settings['redis.connection']['port'] = '6379';
   1. $settings['cache']['default'] = 'cache.backend.redis';
   1. $settings['container_yamls'][] = $app_root. '/sites/default/redis.services.yml';
   1. $settings['redis.settings']['perm_ttl'] = 1209600;
