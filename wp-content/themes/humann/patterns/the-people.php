<?php
/**
 * Title: The people – Athletes and everyone else
 * Slug: humann/the-people
 * Categories: humann
 * Description: Stadium hero with UT logo, branching lines into a grid of everyday people.
 *
 * @package humann
 */
?>
<!-- wp:html -->
<section class="hm-people" id="the-people" aria-label="<?php esc_attr_e( 'The people', 'humann' ); ?>">
	<div class="hm-stadium" style="background-image:url('<?php echo humann_img( 'stadium.webp' ); ?>')">
		<img class="hm-stadium__logo" src="<?php echo humann_img( 'logo-ut.svg' ); ?>" width="313" height="57" alt="<?php esc_attr_e( 'Humann × University of Texas', 'humann' ); ?>">
	</div>

	<div class="hm-people__body">
		<div class="hm-people__intro hm-center">
			<h2 class="hm-h2 hm-mix hm-c-white hm-reveal"><b><?php esc_html_e( 'Then the athletes showed up.', 'humann' ); ?></b><br><?php esc_html_e( '54 team championships. Seven straight in college football. Four straight in college baseball. Two straight in professional hockey.', 'humann' ); ?></h2>
			<span class="hm-vline" data-hm-grow aria-hidden="true"></span>
			<p class="hm-h2 hm-mix hm-c-white hm-reveal"><?php esc_html_e( 'Over 2,000 teams. More than 50,000 athletes', 'humann' ); ?> <b><br><?php esc_html_e( '— all running on the same molecule.', 'humann' ); ?></b></p>
		</div>

		<div class="hm-people__crowd">
			<img class="hm-branches hm-reveal" src="<?php echo humann_img( 'branches.svg' ); ?>" alt="" aria-hidden="true" loading="lazy">
			<p class="hm-h2 hm-mix hm-c-white hm-center hm-reveal"><b><?php esc_html_e( 'And then, everyone else.', 'humann' ); ?></b><br><?php esc_html_e( 'More than 2.7 million customers. Over 700 million doses delivered.', 'humann' ); ?><br><?php esc_html_e( '$1B in revenue since our first order.', 'humann' ); ?></p>
			<div class="hm-grid-photos hm-reveal">
				<img src="<?php echo humann_img( 'photo-grid.webp' ); ?>" alt="<?php esc_attr_e( 'Grid of everyday Humann customers', 'humann' ); ?>" loading="lazy">
			</div>
		</div>
	</div>
</section>
<!-- /wp:html -->
