<?php
/**
 * @file
 */

// remove a tag from the head for Drupal 7
function wpadmin_html_head_alter(&$head_elements) {
	unset($head_elements['system_meta_generator']);
	unset($head_elements['system_meta_content_type']); 
}

// Manipulate the class names of the management menu
function wpadmin_menu_link__management($variables) {
	$element = $variables['element'];
	$sub_menu = '';
	$arrow = '';
	$img = '';
	if ($element['#below']) {
		$sub_menu = drupal_render($element['#below']);
	}
  
	if ($element['#original_link']['depth'] == 2) {
		$arrow = '<div class="wp-menu-arrow"><div></div></div>';
		$img = '<div class="wp-menu-image"><a href="' . $element['#href'] . '"><br></a></div>';
	}
 
	// Add classes to the anchor tag
    $element['#localized_options']['attributes']['class'][] = ' ' . wpadmin_id_safe($element['#title']);
    $element['#localized_options']['attributes']['class'][] = ' level-' . $element['#original_link']['depth'];
	
	// Add classes to the list item
	$element['#attributes']['class'][] = 'level-' . $element['#original_link']['depth'];
	$element['#attributes']['class'][] = ' ' . wpadmin_id_safe($element['#title']);
	
	$output = l($element['#title'], $element['#href'], $element['#localized_options']);
	
	return '<li' . drupal_attributes($element['#attributes']) . '>'  . $img . $arrow . $output  .  $sub_menu . "</li>\n";
}

// Generate a safe id/machine name from a string
function wpadmin_id_safe($string) {
	// Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
	$string = strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
	// If the first character is not a-z, add 'id' in front.
	if (!ctype_lower($string{0})) { // Don't use ctype_alpha since its locale aware.
	$string = 'id' . $string;
	}
	return $string;
}

// Give the top level menu item an ID
function wpadmin_menu_tree__management($variables) {
	if (strpos($variables['tree'],'level-1') === FALSE) {
	 return '<ul >'. $variables['tree'] .'</ul>';
	}
	return '<ul id="adminmenu">'. $variables['tree'] .'</ul>';
}
