<?php

/**
 * @file
 * Drupal site-specific configuration file.
 *
 * Everything that differs between environments (database, hash salt) is read
 * from environment variables, so CI can install the site without this file
 * being rewritten. For local overrides, create settings.local.php next to it.
 */

use Drupal\Core\Database\Database;

$databases = [];

// Database, for example mysql://user:pass@host/database.
if ($database_url = getenv('DRUPAL_DATABASE_URL')) {
  $databases['default']['default'] = Database::convertDbUrlToConnectionInfo($database_url, $app_root);
}

$settings['hash_salt'] = (string) getenv('DRUPAL_HASH_SALT');
$settings['config_sync_directory'] = '../config/sync';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
