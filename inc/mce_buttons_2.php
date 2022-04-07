<?php
// add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );
function my_mce_buttons_2( $buttons ) {
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'superscript';
	$buttons[] = 'subscript';
	array_unshift( $buttons, 'superscript' );

	return $buttons;
}

// The example below will reveal the hidden “Styles” dropdown in the advanced toolbar.
add_filter( 'mce_buttons_2', 'myplugin_tinymce_buttons' );

function myplugin_tinymce_buttons( $buttons ) {
	  // Add style selector to the beginning of the toolbar
	  array_unshift( $buttons, 'styleselectf' );

	  return $buttons;
}




 // remove
 // The example below will remove the text color selector from the advanced toolbar.
//add_filter( 'mce_buttons_2', 'remove_button' );

function remove_button( $buttons ) {
	  // Remove the text color selector
	  $remove = 'forecolor';

	  // Find the array key and then unset
	if ( ( $key = array_search( $remove, $buttons ) ) !== false ) {
		unset( $buttons[ $key ] );
	}

	  return $buttons;
}


// Or, if you want to remove more buttons at the same time:
add_filter( 'mce_buttons_2', 'remove_buttons' );

function remove_buttons( $buttons ) {
	// Remove the format dropdown select and text color selector
	$remove = array( 'styleselect','formatselect', 'forecolor' );

	return array_diff( $buttons, $remove );
}
