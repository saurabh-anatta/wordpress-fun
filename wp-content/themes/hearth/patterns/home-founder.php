<?php
/**
 * Title: Home – Meet the founder
 * Slug: hearth/home-founder
 * Categories: hearth
 * Description: Portrait and short founder introduction.
 *
 * @package hearth
 */
?>
<!-- wp:group {"anchor":"about","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"sand","layout":{"type":"constrained","contentSize":"1120px"}} -->
<div id="about" class="wp-block-group alignfull has-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center hearth-card" style="flex-basis:45%">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo hearth_img( 'founder.jpg' ); ?>" alt="<?php esc_attr_e( 'Portrait of the studio founder', 'hearth' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"hearth-eyebrow"} --><p class="hearth-eyebrow"><?php esc_html_e( 'Meet the founder', 'hearth' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading"><?php echo wp_kses_post( __( 'Hello, I’m <em>Your Name</em>.', 'hearth' ) ); ?></h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Designer, collector of old textiles and firm believer that a home should feel better the longer you live in it. I started Hearth to help families shape spaces that are beautiful without being precious: rooms you can actually sink into.', 'hearth' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Away from the studio you will find me at a flea market, testing a new recipe, or planning the next trip somewhere with good light.', 'hearth' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Our story', 'hearth' ); ?></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
