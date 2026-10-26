<?php
/**
 * Title: Home – Journal
 * Slug: hearth/home-journal
 * Categories: hearth
 * Description: Featured journal story beside a list of recent posts.
 *
 * @package hearth
 */

$hearth_posts = array(
	array( 'b2.jpg', __( 'Five materials that age beautifully', 'hearth' ) ),
	array( 'b3.jpg', __( 'Layering light in a north-facing room', 'hearth' ) ),
	array( 'b4.jpg', __( 'Inside the studio: autumn sourcing notes', 'hearth' ) ),
);
?>
<!-- wp:group {"anchor":"journal","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="journal" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","className":"hearth-eyebrow"} --><p class="has-text-align-center hearth-eyebrow"><?php esc_html_e( 'From our journal', 'hearth' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center"} --><h2 class="wp-block-heading has-text-align-center"><em><?php esc_html_e( 'Notes from Home', 'hearth' ); ?></em></h2><!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column hearth-card" style="flex-basis:58%">
			<!-- wp:image {"sizeSlug":"full","className":"hearth-feature"} -->
			<figure class="wp-block-image size-full hearth-feature"><a href="#"><img src="<?php echo hearth_img( 'b1.jpg' ); ?>" alt="<?php esc_attr_e( 'Styled dining table set for an evening meal', 'hearth' ); ?>"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"hearth-eyebrow","style":{"spacing":{"margin":{"top":"1.2rem"}}}} --><p class="hearth-eyebrow" style="margin-top:1.2rem"><?php esc_html_e( 'Featured', 'hearth' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"x-large"} --><h3 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'The case for a room that is never quite finished', 'hearth' ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p><?php esc_html_e( 'Why we leave space for the pieces you have yet to find, and how to make a home that grows with you instead of freezing in place on install day.', 'hearth' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"hearth-more"} --><p class="hearth-more"><a href="#"><?php esc_html_e( 'Read the story →', 'hearth' ); ?></a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<?php foreach ( $hearth_posts as $hearth_post ) : ?>
			<!-- wp:columns {"isStackedOnMobile":false,"className":"hearth-card hearth-card--wide","style":{"spacing":{"margin":{"bottom":"2rem"},"blockGap":{"left":"1.25rem"}}}} -->
			<div class="wp-block-columns is-not-stacked-on-mobile hearth-card hearth-card--wide" style="margin-bottom:2rem">
				<!-- wp:column {"width":"42%"} -->
				<div class="wp-block-column" style="flex-basis:42%">
					<!-- wp:image {"sizeSlug":"full"} -->
					<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo hearth_img( $hearth_post[0] ); ?>" alt=""/></a></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center">
					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:0"><?php echo esc_html( $hearth_post[1] ); ?></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"className":"hearth-more"} --><p class="hearth-more"><a href="#"><?php esc_html_e( 'Read more →', 'hearth' ); ?></a></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
