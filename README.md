# wordpress-fun

WordPress 7.1.3 core plus **Humann**, a custom block theme (`wp-content/themes/humann`) whose
home page is built from the Figma file *Latest Design → Vertical POC*
(`q2Hp4gK1xsBU8A6Raxxld0`, node `2:218`).

## Preview locally

```sh
./bin/local-preview.sh        # then open http://localhost:8080
```

The script uses PHP's built-in server and SQLite through the official
[SQLite Database Integration](https://wordpress.org/plugins/sqlite-database-integration/) plugin,
so you don't need MySQL. It creates `wp-config.php`, installs the site (admin / admin123, for local use only)
and activates the Humann theme. Use `PORT=9000 ./bin/local-preview.sh` to pick another port.

On a real host, upload or merge `wp-content/themes/humann` and activate it in **Appearance → Themes**.
The front page shows automatically when *Settings → Reading* is set to "Your latest posts" (the default).

## Home page sections (`patterns/`)

| Pattern | Figma frame | Motion |
|---|---|---|
| `hero.php` | Hero Section | breathing red texture, animated chevrons |
| `how-it-started.php` | First frame – horizontal scroll | pinned sideways scroll; heartbeat and vessels trace in |
| `nitric-oxide.php` | Nitric Oxide Scroll | pinned; screen tilts away in 3D, molecule panel slides in |
| `the-science.php` | The science – Blood Vessels | sticky caption over stacked imagery, zoom-settle |
| `timeline.php` | Timeline | line draws with scroll, items fade up |
| `molecule.php` | why we made it – Molecule | drifting vessels |
| `the-proof.php` | The proof | product parallax, auto-rotating advisory board, count-up stats |
| `the-people.php` | the people + People | line grows, crowd fades in |
| `whats-next.php` | Lifestyle Video, Product Images, Closing CTA | frosted panel parallax |

The sticky pill nav (`parts/header.html`) highlights the current section. Its pause button stops all
motion, and `prefers-reduced-motion` is respected. Below 768px the horizontal story becomes a
vertical one. The scroll logic is plain JS in `assets/js/home.js`, with no dependencies.

Element positions in the pinned sections use the Figma coordinates directly
(`style="--x:665;--y:103;--w:510"`), scaled so that 1 design px is 1/900 of the viewport height.

## Fonts

The design uses commercial fonts: Moderat Serif, Stabil Grotesk and (K) Uniforma. The theme bundles open
substitutes: Newsreader, Inter Tight and Archivo. If you have licences, drop the real `.woff2` files into
`assets/fonts/` and add them to `theme.json`. The font stacks already list the real names first.

## Still to do

- Timeline items and the advisory board cards are video placeholders in Figma. They use still frames
  for now; swap in `<video autoplay muted loop playsinline>` when the clips are ready.
- "Get started today" links to `#`; point it at the shop or product page.
