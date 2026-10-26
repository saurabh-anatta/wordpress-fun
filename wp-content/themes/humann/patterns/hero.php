<?php
/**
 * Title: Hero – Cardiovascular health is everything health
 * Slug: humann/hero
 * Categories: humann
 * Description: Full-screen red hero with animated texture, logo, tagline and "Discover" cue.
 *
 * @package humann
 */
?>
<!-- wp:html -->
<section class="hm-hero" id="top" aria-label="<?php esc_attr_e( 'Introduction', 'humann' ); ?>">
	<div class="hm-hero__bg" style="background-image:url('<?php echo humann_img( 'hero-texture.webp' ); ?>')" aria-hidden="true"></div>
	<div class="hm-hero__center">
		<h1 class="hm-hero__logo">
			<img src="<?php echo humann_img( 'logo.svg' ); ?>" width="435" height="75" alt="<?php esc_attr_e( 'Humann', 'humann' ); ?>">
		</h1>
		<p class="hm-hero__tag hm-mix"><?php esc_html_e( 'Cardiovascular health is', 'humann' ); ?> <b><?php esc_html_e( 'everything health', 'humann' ); ?></b></p>
	</div>
	<a class="hm-hero__discover" href="#how-it-started">
		<span class="hm-label"><?php esc_html_e( 'Discover', 'humann' ); ?></span>
		<span class="hm-chevrons" aria-hidden="true"><i></i><i></i><i></i></span>
	</a>
</section>
<!-- /wp:html -->
