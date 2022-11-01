<?php
// @codingStandardsIgnoreFile

$settings['hash_salt'] = 'hQnf7cmqQgiDUPAP8rCaE42HEC5XqvKKvjMusPjl2gMp2rh80S-EdTPwCb9FD1cqzRHGSznRvA';
$settings['config_sync_directory'] = '../config/sync';
$settings['file_private_path'] = '../private';
$settings['container_yamls'][] = __DIR__.'/services.yml';
$settings['container_yamls'][] = __DIR__.'/monolog.services.yml';
$settings['update_free_access'] = FALSE;
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

if (file_exists(__DIR__.'/settings.env.php')) {
  include __DIR__.'/settings.env.php';
}
