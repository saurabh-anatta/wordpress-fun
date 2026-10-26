<?php
/**
 * Title: The science – Nitric oxide (scroll-animated)
 * Slug: humann/nitric-oxide
 * Categories: humann
 * Description: Pinned red stage. The headline and screen give way to the "miracle molecule" panel as you scroll.
 *
 * @package humann
 */
?>
<!-- wp:html -->
<section class="hm-no" id="the-science" data-hm-pin aria-label="<?php esc_attr_e( 'The science: nitric oxide', 'humann' ); ?>">
	<div class="hm-no__sticky">
		<div class="hm-no__stage">
			<div class="hm-no__a">
				<h2 class="hm-h hm-mix hm-c-white hm-no__title"><?php esc_html_e( 'And at the center of it all is a molecule your doctor has probably never mentioned:', 'humann' ); ?> <b><?php esc_html_e( 'Nitric oxide.', 'humann' ); ?></b></h2>
			</div>
			<img class="hm-no__screen" src="<?php echo humann_img( 'no-screen.webp' ); ?>" alt="<?php esc_attr_e( 'Illustration of nitric oxide relaxing a blood vessel wall', 'humann' ); ?>" loading="lazy">

			<div class="hm-no__b">
				<div class="hm-no__copy">
					<p class="hm-h2 hm-c-white"><?php esc_html_e( 'They call it the miracle molecule.', 'humann' ); ?><br><?php esc_html_e( 'But scientists don\'t call it that lightly.', 'humann' ); ?></p>
					<p class="hm-h2 hm-g hm-c-white"><?php esc_html_e( 'It is the most important molecule in your cardiovascular system.', 'humann' ); ?></p>
				</div>
				<div class="hm-no__art" aria-hidden="true">
					<img class="hm-no__shadow hm-no__shadow--1" src="<?php echo humann_img( 'no-shadow2.webp' ); ?>" alt="">
					<img class="hm-no__shadow hm-no__shadow--2" src="<?php echo humann_img( 'no-shadow1.webp' ); ?>" alt="">
					<img class="hm-no__molecule" src="<?php echo humann_img( 'no-molecule.webp' ); ?>" alt="">
					<img class="hm-no__pin" src="<?php echo humann_img( 'no-pin.webp' ); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /wp:html -->
