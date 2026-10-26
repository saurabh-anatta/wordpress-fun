# wordpress-fun

WordPress 7.1.3 core plus **Hearth**, a custom block theme for an interior design studio
(`wp-content/themes/hearth`).

## Preview locally

```sh
./bin/local-preview.sh        # then open http://localhost:8080
```

The script uses PHP's built-in server and SQLite through the official
[SQLite Database Integration](https://wordpress.org/plugins/sqlite-database-integration/)
plugin, so you don't need MySQL. It creates `wp-config.php`, installs the site
(admin / admin123, for local use only) and activates the Hearth theme. Use `PORT=9000 ./bin/local-preview.sh` to pick another port.

On a real host (with MySQL), upload or merge `wp-content/themes/hearth` and activate it in
**Appearance → Themes**.

## Hearth theme

- `theme.json`: palette (cream `#FAF9F4`, espresso `#433B28`, linen, sand, taupe), fonts
  (EB Garamond and Hanken Grotesk, self-hosted in `assets/fonts`), and spacing.
- `templates/front-page.html`: home page built from the patterns in `patterns/home-*.php`:
  hero, recent projects, journal, founder, newsletter, client notes and services.
- `parts/header.html` and `parts/footer.html`.

All text, project names, testimonials and the founder bio are **placeholders**. Replace them with
your own content and real client reviews. The photos in `assets/images` are placeholder stock
from picsum.photos (Unsplash license); swap in your own project photography. The newsletter
form is not connected yet; hook it to your mailing list provider.
