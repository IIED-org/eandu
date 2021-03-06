<?php

/**
 * template.php v.3.0 cb 2012-02-02T11:37
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 function iied_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/colours/set_' . date('d') % 4 . '/search-button.gif');

// Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
  }
  
  if ($form_id == 'custom-search-blocks-form-1') {
     $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/colours/set_' . date('d') % 4 . '/search-button.gif');
  }
} 
/**
* Process variables for search-result.tpl.php.
*
* @see search-result.tpl.php
*/
function iied_preprocess_search_result(&$variables) {
  // Remove user name and modification date from search results
  $variables['info'] = '';
}