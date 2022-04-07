<?php
add_filter( 'mce_buttons_3', 'mce_buttons_3_test_1', 10, 2 );
function mce_buttons_3_test_1( $mce_buttons_3, $editor_id ){
	// filter...

	return $mce_buttons_3;
}