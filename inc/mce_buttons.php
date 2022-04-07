<?php
#https://core.trac.wordpress.org/browser/tags/5.9/src/wp-includes/class-wp-editor.php#L669
add_filter( 'mce_buttons', 'mce_buttons_test_1',1,2 );
function mce_buttons_test_1( $mce_buttons, $editor_id ) {
    
    var_export($mce_buttons);
	return $mce_buttons;
}
