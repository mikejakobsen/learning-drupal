<?php
// Form override fo theme settings
function boilerplate_form_system_theme_settings_alter(&$form, $form_state) {

  $form['options_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Theme Specific Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE
  );
  $form['options_settings']['boilerplate_tabs'] = array(
    '#type' => 'checkbox',
    '#title' =>  t('Use the ZEN tabs'),
    '#description'   => t('Check this if you wish to replace the default tabs by the ZEN tabs'),
    '#default_value' => theme_get_setting('boilerplate_tabs'),
  );

  $form['options_settings']['boilerplate_breadcrumb'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Breadcrumb settings'),
    '#attributes'    => array('id' => 'boilerplate-breadcrumb'),
  );
  $form['options_settings']['boilerplate_breadcrumb']['boilerplate_breadcrumb'] = array(
    '#type'          => 'select',
    '#title'         => t('Display breadcrumb'),
    '#default_value' => theme_get_setting('boilerplate_breadcrumb'),
    '#options'       => array(
                          'yes'   => t('Yes'),
                          'admin' => t('Only in admin section'),
                          'no'    => t('No'),
                        ),
  );
  $form['options_settings']['boilerplate_breadcrumb']['boilerplate_breadcrumb_separator'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Breadcrumb separator'),
    '#description'   => t('Text only. Don’t forget to include spaces.'),
    '#default_value' => theme_get_setting('boilerplate_breadcrumb_separator'),
    '#size'          => 5,
    '#maxlength'     => 10,
    '#prefix'        => '<div id="div-boilerplate-breadcrumb-collapse">', // jquery hook to show/hide optional widgets
  );
  $form['options_settings']['boilerplate_breadcrumb']['boilerplate_breadcrumb_home'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Show home page link in breadcrumb'),
    '#default_value' => theme_get_setting('boilerplate_breadcrumb_home'),
  );
  $form['options_settings']['boilerplate_breadcrumb']['boilerplate_breadcrumb_trailing'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Append a separator to the end of the breadcrumb'),
    '#default_value' => theme_get_setting('boilerplate_breadcrumb_trailing'),
    '#description'   => t('Useful when the breadcrumb is placed just before the title.'),
  );
  $form['options_settings']['boilerplate_breadcrumb']['boilerplate_breadcrumb_title'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Append the content title to the end of the breadcrumb'),
    '#default_value' => theme_get_setting('boilerplate_breadcrumb_title'),
    '#description'   => t('Useful when the breadcrumb is not placed just before the title.'),
    '#suffix'        => '</div>', // #div-boilerplate-breadcrumb
  );
  $form['options_settings']['clear_registry'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Rebuild theme registry on every page.'),
    '#description'   => t('During theme development, it can be very useful to continuously <a href="!link">rebuild the theme registry</a>. WARNING: this is a huge performance penalty and must be turned off on production websites.', array('!link' => 'http://drupal.org/node/173880#theme-registry')),
    '#default_value' => theme_get_setting('clear_registry'),
  );
  $form['options_settings']['toggle_node_user_picture'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Include User pictures with nodes'),
    '#description'   => t('Toggle User pictures', array('!link' => 'http://drupal.org/node/173880#theme-registry')),
    '#default_value' => theme_get_setting('toggle_node_user_picture'),
  );
}
