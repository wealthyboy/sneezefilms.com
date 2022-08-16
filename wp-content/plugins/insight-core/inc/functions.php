<?php

function insight_core_base_decode( $string ) {
	return base64_decode( $string );
}

function insight_core_base_encode( $string ) {
	return base64_encode( $string );
}

function insight_core_get_remote_addr() {
	return $_SERVER["REMOTE_ADDR"];
}