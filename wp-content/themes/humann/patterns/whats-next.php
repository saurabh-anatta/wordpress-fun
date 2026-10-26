<?php
/**
 * Title: What's next – Just getting started, products, closing CTA
 * Slug: humann/whats-next
 * Categories: humann
 * Description: Lifestyle image with frosted-glass statement, red product section with category pills, closing call to action.
 *
 * @package humann
 */

$humann_pills = array(
	array( '#8C0132', __( 'Blood Pressure', 'humann' ) ),
	array( '#E9FF6D', __( 'Energy', 'humann' ) ),
	array( '#D54427', __( 'Cholesterol', 'humann' ) ),
	array( '#E62F5E', __( 'Metabolic Support', 'humann' ) ),
);
?>
<!-- wp:html -->
<section class="hm-next" id="whats-next" aria-label="<?php esc_attr_e( 'What\'s next', 'humann' ); ?>">
	<div class="hm-lifestyle">
		<div class="hm-glass" data-hm-parallax="-0.08">
			<p class="hm-h hm-mix hm-c-white"><?php esc_html_e( 'So yes, we’re fifteen years in', 'humann' ); ?> <b><?php esc_html_e( '- but we\'re still just getting started.', 'humann' ); ?></b></p>
			<p class="hm-lead hm-glass__sub"><?php esc_html_e( 'The early chapters were all about this one molecule. But the people who trust us started asking for more. The same standard, applied to the rest of cardiovascular health.', 'humann' ); ?></p>
		</div>
		<img class="hm-lifestyle__img hm-reveal" src="<?php echo humann_img( 'lifestyle.webp' ); ?>" alt="<?php esc_attr_e( 'Friends sharing a morning drink in the kitchen', 'humann' ); ?>" loading="lazy">
	</div>
</section>

<section class="hm-red hm-products" aria-label="<?php esc_attr_e( 'Products', 'humann' ); ?>">
	<img class="hm-red__vessels hm-red__vessels--left hm-drift" src="<?php echo humann_img( 'final-vessels.webp' ); ?>" alt="" aria-hidden="true" loading="lazy">
	<div class="hm-split hm-split--reverse">
		<div class="hm-split__copy hm-reveal">
			<h2 class="hm-h hm-mix hm-c-white"><?php esc_html_e( 'It was always about the', 'humann' ); ?> <b><?php esc_html_e( '60,000 miles', 'humann' ); ?></b> <?php esc_html_e( 'running through every single one of us.', 'humann' ); ?></h2>
			<p class="hm-body hm-c-white"><?php esc_html_e( 'There isn\'t a person on Earth who doesn\'t benefit from better cardiovascular health. It isn\'t supplemental. It\'s central to', 'humann' ); ?></p>
			<ul class="hm-pills">
				<?php foreach ( $humann_pills as $humann_p ) : ?>
				<li><span style="background:<?php echo esc_attr( $humann_p[0] ); ?>"></span><?php echo esc_html( $humann_p[1] ); ?></li>
				<?php endforeach; ?>
			</ul>
			<p class="hm-body hm-c-white"><?php esc_html_e( 'and more.', 'humann' ); ?> <strong><?php esc_html_e( 'So start where it actually starts.', 'humann' ); ?></strong></p>
		</div>
		<div class="hm-split__media hm-reveal">
			<img src="<?php echo humann_img( 'final-photo.webp' ); ?>" alt="<?php esc_attr_e( 'Humann cardiovascular products', 'humann' ); ?>" width="530" height="795" loading="lazy">
		</div>
	</div>
</section>

<section class="hm-cta" style="background-image:url('<?php echo humann_img( 'hero-texture.webp' ); ?>'),url('<?php echo humann_img( 'cta.webp' ); ?>')" aria-label="<?php esc_attr_e( 'Get started', 'humann' ); ?>">
	<div class="hm-cta__inner hm-reveal">
		<h2 class="hm-h hm-mix hm-c-white"><?php esc_html_e( 'Your cardiovascular routine', 'humann' ); ?> <b><?php esc_html_e( 'starts here.', 'humann' ); ?></b></h2>
		<a class="hm-btn" href="#"><?php esc_html_e( 'Get started today', 'humann' ); ?></a>
	</div>
</section>
<!-- /wp:html -->
