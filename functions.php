<?php

function function_that_does_not_exist() {
	return 'some result';
}

/**
 * Gets the ad code for our property (pr) with id
 *
 * @since 0.0.1
 * @author Keith
 *
 * @param integer - id for ad code
 * @param string - pr property for ad code
 * @return string - the ad code url params
 */
function pn_get_ad_code( $id, $pr ) {
	$id = intval( $id );
	$pr = sanitize_text_field( $pr );
	
	if ( empty( $id ) || $id == 0  ) {
		return 'error';
	}
	
	if ( empty( $pr ) ) {
		return 'error';
	}
	
	
	$ad_code = 'id=' . intval( $id ) . '&pr=' . sanitize_text_field( $pr );
	
	return $ad_code;
}