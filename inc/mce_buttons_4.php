<?php
add_filter( 'mce_buttons_4', 'mce_buttons_4_test_1', 10, 2 );
function mce_buttons_4_test_1( $mce_buttons_4, $editor_id ){
	// filter...

	return $mce_buttons_4;
}