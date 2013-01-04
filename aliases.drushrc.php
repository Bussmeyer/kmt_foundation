<?php

// Get the local Drupal root path from Drush.
$local_root = drush_get_context('DRUSH_DRUPAL_ROOT');
if ($local_root == NULL) {
  $local_root = drush_get_option(array('r', 'root'), drush_locate_root());
}

$aliases['local'] = array(
  'root' => $local_root,
  'uri' => 'default',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
    '%dump' => '/tmp/dump.sql', // Arbitrary location for temp files
   ),
);

$aliases['dev'] = array(
  'root' => '/path/to/drupal/root/public_html',
  'uri' => 'default',
  'remote-host' => 'DEV_SERVER_IP',
  'remote-user' => 'root',
  'ssh-options' => '-o PasswordAuthentication=yes',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
    '%dump' => '/tmp/dump.sql', // Arbitrary location for temp files
   ),
   'command-specific' => array (
     'sql-sync' => array (
       'simulate' => '0',
       'structure-tables' => array(
         'custom' => array('cache', 'cache_filter', 'cache_menu', 'cache_page', 'history', 'sessions', 'watchdog'),
       ),
     ),
     'rsync' => array (
       'simulate' => '0',
       'mode' => 'rlptDz',
     ),
   ),
);

$aliases['live'] = array(
  'root' => '/path/to/drupal/root/public_html',
  'uri' => 'default',
  'remote-host' => 'LIVE_SERVER_IP',
  'remote-user' => 'root',
  'ssh-options' => '-o PasswordAuthentication=yes',
  'path-aliases' => array(
    '%files' => 'sites/default/files',
    '%dump' => '/tmp/dump.sql', // Arbitrary location for temp files
   ),
   'command-specific' => array (
     'sql-sync' => array (
       'simulate' => '1',
     ),
     'rsync' => array (
       'simulate' => '1',
       'ssh-options' => '-p9999',
     ),
   ),
);
