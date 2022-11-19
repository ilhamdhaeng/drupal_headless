<?php

// @codingStandardsIgnoreFile
$databases['default']['default'] = [
  'database' => 'drupal_headless',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'driver' => 'mysql',
];

assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();

$settings['container_yamls'][] = $app_root . '/sites/development.services.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['rebuild_access'] = TRUE;
$settings['skip_permissions_hardening'] = TRUE;
$settings['reverse_proxy'] = FALSE;

$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
$config['system.site']['name'] = 'Drupal Headless';
$config['mailsystem.settings']['defaults']['sender'] = 'php_mail';
$config['simple_sitemap_engines.settings']['enabled'] = FALSE;
$config['config_split.config_split.dev']['status'] = TRUE;
$config['ga.settings']['tracking_id'] = '';

