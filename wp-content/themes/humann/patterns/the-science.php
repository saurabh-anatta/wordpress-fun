<?php
/**
 * Title: The science – Blood vessels
 * Slug: humann/the-science
 * Categories: humann
 * Description: Black section of stacked blood-vessel imagery with a sticky caption, ending on "We didn't discover it".
 *
 * Each image keeps its Figma crop: --h is the slice height, --x/--w the image offset and width (design width 1440).
 *
 * @package humann
 */

$humann_slices = array(
	array( 'sci-1.webp', 1114, 0, 1440 ),
	array( 'sci-2.webp', 1125, -366, 2048 ),
	array( 'sci-3.webp', 1070, -376, 2147 ),
	array( 'sci-4.webp', 987, -268, 1976 ),
	array( 'sci-5.webp', 1031, -314, 2070 ),
	array( 'sci-6.webp', 1009, -128, 1722 ),
);
?>
<!-- wp:html -->
<section class="hm-sci" aria-label="<?php esc_attr_e( 'Blood vessels', 'humann' ); ?>">
	<div class="hm-sci__stack">
		<?php foreach ( $humann_slices as $humann_i => $humann_s ) : ?>
			<?php if ( 1 === $humann_i ) : ?>
		<div class="hm-sci__caption-wrap">
			<p class="hm-sci__caption hm-h hm-mix hm-c-white"><?php esc_html_e( '…keeping those', 'humann' ); ?> <b><?php esc_html_e( '60,000 miles', 'humann' ); ?></b> <?php esc_html_e( 'open, flowing… and alive.', 'humann' ); ?></p>
			<?php endif; ?>
			<div class="hm-slice hm-reveal" style="--h:<?php echo (int) $humann_s[1]; ?>;--x:<?php echo (int) $humann_s[2]; ?>;--w:<?php echo (int) $humann_s[3]; ?>">
				<img src="<?php echo humann_img( $humann_s[0] ); ?>" alt="" loading="lazy" decoding="async">
			</div>
			<?php if ( 3 === $humann_i ) : ?>
		</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>

	<div class="hm-sci__end" id="why-we-made-it">
		<h2 class="hm-h hm-mix hm-c-white hm-reveal"><?php esc_html_e( 'We didn\'t discover it. But we did have the ambition to', 'humann' ); ?> <b><?php esc_html_e( 'take the Nobel-winning science out of the lab', 'humann' ); ?><br><?php esc_html_e( '— and bring it to the people.', 'humann' ); ?></b></h2>
		<p class="hm-sci__rule hm-reveal"><span><?php esc_html_e( 'That\'s where the revolution started.', 'humann' ); ?></span></p>
	</div>
</section>
<!-- /wp:html -->
