<?php

/**
 * Implements hook_drush_command().
 */
function nocache_drush_command() {
  $items['nocache'] = array(
    'description' => 'Executes nocache hook: disables caches, cdn etc.',
    'aliases' => array('nc'),
  );

  return $items;
}

/**
 * Callback for the NoCache command.
 */
function drush_nocache() {
  module_invoke_all('nocache');
}
