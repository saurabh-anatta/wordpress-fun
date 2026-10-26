<?php
/**
 * Title: Why we made it – The molecule in all of us
 * Slug: humann/molecule
 * Categories: humann
 * Description: Red section with drifting blood vessels, portrait and the "same molecule" statement.
 *
 * @package humann
 */
?>
<!-- wp:html -->
<section class="hm-red hm-molecule" aria-label="<?php esc_attr_e( 'The molecule in all of us', 'humann' ); ?>">
	<img class="hm-red__vessels hm-drift" src="<?php echo humann_img( 'why-vessels.webp' ); ?>" alt="" aria-hidden="true" loading="lazy">
	<div class="hm-split">
		<div class="hm-split__media hm-reveal">
			<img src="<?php echo humann_img( 'why-photo.webp' ); ?>" alt="<?php esc_attr_e( 'Athlete resting between training sets', 'humann' ); ?>" width="530" height="795" loading="lazy">
		</div>
		<div class="hm-split__copy hm-reveal">
			<h2 class="hm-h hm-mix hm-c-white">
				<b><?php esc_html_e( 'Because the same molecule', 'humann' ); ?> <img class="hm-inline-molecule" src="<?php echo humann_img( 'why-molecule.webp' ); ?>" alt="" aria-hidden="true"> <?php esc_html_e( 'that started this', 'humann' ); ?></b>
				<?php esc_html_e( 'runs through all of us.', 'humann' ); ?>
			</h2>
			<p class="hm-lead hm-c-mist"><?php esc_html_e( 'The same mechanism helping a 23-year-old athlete perform at their peak — and a 68-year-old support healthy blood pressure. One superhighway for blood flow, delivering critical oxygen and nutrients to the 36 trillion cells in the body. Not a single one of those cells can live, let alone thrive, without a healthy cardiovascular system.', 'humann' ); ?></p>
		</div>
	</div>
</section>
<!-- /wp:html -->
