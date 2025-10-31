<?php

require_once 'publicmailings.civix.php';

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function publicmailings_civicrm_config(&$config) {
  _publicmailings_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function publicmailings_civicrm_install() {
  return _publicmailings_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function publicmailings_civicrm_enable() {
  return _publicmailings_civix_civicrm_enable();
}
