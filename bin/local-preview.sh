#!/usr/bin/env bash
# Local preview: WordPress on PHP's built-in server with SQLite (no MySQL needed).
# Needs: php (with pdo_sqlite, mbstring, xml, gd), curl, unzip.
set -euo pipefail
cd "$(dirname "$0")/.."
PORT="${PORT:-8080}"
URL="${URL:-http://localhost:$PORT}"

WP="wp --allow-root"
if ! command -v wp >/dev/null; then
  curl -sSL -o /tmp/wp-cli.phar https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
  WP="php /tmp/wp-cli.phar --allow-root"
fi

# SQLite drop-in (official WordPress Performance Team plugin)
if [ ! -f wp-content/db.php ]; then
  curl -sSL -o /tmp/sqlite.zip https://downloads.wordpress.org/plugin/sqlite-database-integration.latest-stable.zip
  unzip -qo /tmp/sqlite.zip -d wp-content/plugins
  sed "s#{SQLITE_IMPLEMENTATION_FOLDER_PATH}#' . WP_CONTENT_DIR . '/plugins/sqlite-database-integration#; s#{SQLITE_PLUGIN}#sqlite-database-integration/load.php#" \
    wp-content/plugins/sqlite-database-integration/db.copy > wp-content/db.php
fi

if [ ! -f wp-config.php ]; then
  $WP config create --dbname=wp --dbuser=wp --dbpass=wp --skip-check \
    --extra-php <<'PHP'
define( 'DB_DIR', __DIR__ . '/wp-content/database/' );
/* Local preview: use whatever host/scheme the request came in on (sandbox proxy, localhost, LAN). */
if ( ! empty( $_SERVER['HTTP_HOST'] ) ) {
	$hm_host  = ! empty( $_SERVER['HTTP_X_FORWARDED_HOST'] ) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST'];
	$hm_https = ! empty( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && 'https' === $_SERVER['HTTP_X_FORWARDED_PROTO'];
	if ( $hm_https ) { $_SERVER['HTTPS'] = 'on'; }
	define( 'WP_HOME', ( $hm_https ? 'https://' : 'http://' ) . $hm_host );
	define( 'WP_SITEURL', WP_HOME );
}
PHP
fi

if ! $WP core is-installed 2>/dev/null; then
  $WP core install --url="$URL" --title="Humann" --admin_user=admin \
    --admin_password=admin123 --admin_email=admin@example.com --skip-email
  $WP option update blogdescription "Cardiovascular health is everything health"
fi
$WP theme activate humann

# Local preview only: root-relative URLs so assets load through any proxy/host (gitignored)
mkdir -p wp-content/mu-plugins
cp bin/local-relative-urls.php wp-content/mu-plugins/local-relative-urls.php

echo "Serving $URL  (admin: $URL/wp-admin  user: admin / admin123)"
exec php -S 0.0.0.0:"$PORT" router.php
