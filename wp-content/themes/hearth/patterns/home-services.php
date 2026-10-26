<?php
/**
 * Title: Home – Services
 * Slug: hearth/home-services
 * Categories: hearth
 * Description: Four service offerings with photos and a call to action.
 *
 * @package hearth
 */

$hearth_services = array(
	array( 's1.jpg', __( 'Custom home', 'hearth' ), __( 'A complete design for a new build or major renovation, covering layout, finishes, fixtures and furnishings.', 'hearth' ) ),
	array( 's2.jpg', __( 'Renovation', 'hearth' ), __( 'Kitchens, bathrooms and living spaces reworked to suit the way your household really moves.', 'hearth' ) ),
	array( 's3.jpg', __( 'Furnishing', 'hearth' ), __( 'Just moved or finished a remodel? We source and style every room so you can settle in.', 'hearth' ) ),
	array( 's4.jpg', __( 'Room refresh', 'hearth' ), __( 'New textiles, lighting and art to give a favourite room a lighter, more personal feel.', 'hearth' ) ),
);
?>
<!-- wp:group {"anchor":"services","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"linen","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="services" class="wp-block-group alignfull has-linen-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","className":"hearth-eyebrow"} --><p class="has-text-align-center hearth-eyebrow"><?php esc_html_e( 'Services', 'hearth' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center"} --><h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Let’s make something lovely', 'hearth' ); ?></h2><!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"2rem"}},"layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
		<?php foreach ( $hearth_services as $hearth_service ) : ?>
		<!-- wp:group {"className":"hearth-card","style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group hearth-card">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo hearth_img( $hearth_service[0] ); ?>" alt="<?php echo esc_attr( $hearth_service[1] ); ?>"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html( $hearth_service[1] ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><?php echo esc_html( $hearth_service[2] ); ?></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div id="inquire" class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Inquire about a project', 'hearth' ); ?></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
