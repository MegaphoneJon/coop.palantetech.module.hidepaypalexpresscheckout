<?php

require_once 'hidepaypalexpresscheckout.civix.php';

/**
 * Implements hook_civicrm_buildForm().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_buildForm
 */
function hidepaypalexpresscheckout_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution_Main' && !empty($form->_elementIndex['_qf_Main_upload_express'])
  ) {
    unset($form->_elements[$form->_elementIndex['_qf_Main_upload_express']]);
    unset($form->_elementIndex['_qf_Main_upload_express']);
  }
  if ($formName == 'CRM_Financial_Form_Payment' && !empty($form->_elementIndex['_qf_Payment_upload_express'])
  ) {
    unset($form->_elements[$form->_elementIndex['_qf_Payment_upload_express']]);
    unset($form->_elementIndex['_qf_Payment_upload_express']);
  }
  if ($formName == 'CRM_Contribute_Form_UpdateBilling' && !empty($form->_elementIndex['_qf_UpdateBilling_upload_express'])) {
    unset($form->_elements[$form->_elementIndex['_qf_UpdateBilling_upload_express']]);
    unset($form->_elementIndex['_qf_UpdateBilling_upload_express']);
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function hidepaypalexpresscheckout_civicrm_config(&$config) {
  _hidepaypalexpresscheckout_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function hidepaypalexpresscheckout_civicrm_xmlMenu(&$files) {
  _hidepaypalexpresscheckout_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function hidepaypalexpresscheckout_civicrm_install() {
  _hidepaypalexpresscheckout_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function hidepaypalexpresscheckout_civicrm_uninstall() {
  _hidepaypalexpresscheckout_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function hidepaypalexpresscheckout_civicrm_enable() {
  _hidepaypalexpresscheckout_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function hidepaypalexpresscheckout_civicrm_disable() {
  _hidepaypalexpresscheckout_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function hidepaypalexpresscheckout_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _hidepaypalexpresscheckout_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function hidepaypalexpresscheckout_civicrm_managed(&$entities) {
  _hidepaypalexpresscheckout_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function hidepaypalexpresscheckout_civicrm_caseTypes(&$caseTypes) {
  _hidepaypalexpresscheckout_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function hidepaypalexpresscheckout_civicrm_angularModules(&$angularModules) {
  _hidepaypalexpresscheckout_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function hidepaypalexpresscheckout_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _hidepaypalexpresscheckout_civix_civicrm_alterSettingsFolders($metaDataFolders);
}
