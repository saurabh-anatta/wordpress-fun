<?php
/**
 * Title: Home – Client notes
 * Slug: hearth/home-testimonials
 * Categories: hearth
 * Description: Scrollable row of client testimonials (placeholder copy – replace with real reviews).
 *
 * @package hearth
 */

$hearth_quotes = array(
	__( 'They listened closely, nudged us out of our comfort zone, and handled every finish from tile to door handles. Our home finally feels like us.', 'hearth' ),
	__( 'Calm, organised and genuinely fun to work with. The team kept the renovation on schedule and the result is better than we pictured.', 'hearth' ),
	__( 'We wanted to keep a few family heirlooms in the mix. They built the whole scheme around them and the space feels personal, not staged.', 'hearth' ),
	__( 'From the first mood board to the final cushion, every step was thoughtful and clear. We have already booked our next room.', 'hearth' ),
	__( 'Practical about budget, brilliant with colour, and always quick to reply. I would recommend them to anyone starting a project.', 'hearth' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"align":"center","className":"hearth-eyebrow"} --><p class="has-text-align-center hearth-eyebrow"><?php esc_html_e( 'Kind words', 'hearth' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center"} --><h2 class="wp-block-heading has-text-align-center"><em><?php esc_html_e( 'Notes from our clients', 'hearth' ); ?></em></h2><!-- /wp:heading -->

	<!-- wp:group {"className":"hearth-quotes","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group hearth-quotes" style="margin-top:var(--wp--preset--spacing--50)">
		<?php foreach ( $hearth_quotes as $hearth_i => $hearth_quote ) : ?>
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"2rem","right":"2rem"}}},"backgroundColor":"linen","layout":{"type":"default"}} -->
		<div class="wp-block-group has-linen-background-color has-background" style="padding-top:2.25rem;padding-right:2rem;padding-bottom:2.25rem;padding-left:2rem">
			<!-- wp:paragraph {"fontSize":"large","fontFamily":"serif","style":{"typography":{"lineHeight":"1.45"}}} -->
			<p class="has-serif-font-family has-large-font-size" style="line-height:1.45">“<?php echo esc_html( $hearth_quote ); ?>”</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"hearth-eyebrow"} -->
			<p class="hearth-eyebrow"><?php /* translators: %d: client number */ echo esc_html( sprintf( __( 'Client name %d', 'hearth' ), $hearth_i + 1 ) ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
