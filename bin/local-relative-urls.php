<?php
/**
 * Plugin Name: Local preview – relative URLs
 * Description: Local/sandbox preview only. Rewrites absolute site URLs in front-end HTML to root-relative
 * ones so CSS, JS and images load from whatever host and scheme (http/https) the browser used.
 * Do not deploy to production.
 */

if ( is_admin() || wp_doing_ajax() || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) ) {
	return;
}

add_action(
	'template_redirect',
	function () {
		$host = wp_parse_url( home_url(), PHP_URL_HOST );
		$port = wp_parse_url( home_url(), PHP_URL_PORT );
		$hp   = $host . ( $port ? ':' . $port : '' );
		ob_start(
			function ( $html ) use ( $hp ) {
				$from = array( 'https://' . $hp, 'http://' . $hp, 'https:\/\/' . $hp, 'http:\/\/' . $hp, '//' . $hp );
				return str_replace( $from, '', $html );
			}
		);
	},
	0
);

// Don't bounce visitors to a canonical host the browser can't reach.
remove_action( 'template_redirect', 'redirect_canonical' );
