<?php

$databases = array();
$config_directories = array();
$settings['hash_salt'] = '0F851cchzcq3_ZTrvQPJGvJ6iqEhCN3_LxalwYaqhbV0VZlqMOcGyMrpslWFe7x6tMp5rQRD2Q';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$databases['default']['default'] = array (
  'database' => 'drupal8',
  'username' => 'admin',
  'password' => 'admin',
  'prefix' => '',
  'host' => 'mysql',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/files/config__Ls6QHZlJDKq51fZSfIoWaORQNRPEWRYHSwWya03Q_kQ83NiKjUE8RmsfOgkotkn5N9gyRQZaw/sync';
