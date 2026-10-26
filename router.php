<?php
// Router for PHP's built-in server (local preview only).
$path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$file = __DIR__ . $path;
if ( $path !== '/' && file_exists( $file ) && ! is_dir( $file ) ) {
	return false;
}
if ( is_dir( $file ) && file_exists( rtrim( $file, '/' ) . '/index.php' ) ) {
	chdir( $file );
	require rtrim( $file, '/' ) . '/index.php';
	return;
}
require __DIR__ . '/index.php';
