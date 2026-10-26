<?php
/**
 * Title: Home – Recent projects
 * Slug: hearth/home-projects
 * Categories: hearth
 * Description: Four-up grid of portfolio projects.
 *
 * @package hearth
 */

$hearth_projects = array(
	array( 'p1.jpg', __( 'Juniper House', 'hearth' ), __( 'Full renovation', 'hearth' ) ),
	array( 'p2.jpg', __( 'The Cedar Loft', 'hearth' ), __( 'New construction', 'hearth' ) ),
	array( 'p3.jpg', __( 'Willow Cottage', 'hearth' ), __( 'Furnishing', 'hearth' ) ),
	array( 'p4.jpg', __( 'Harbor Flat', 'hearth' ), __( 'Room refresh', 'hearth' ) ),
);
?>
<!-- wp:group {"anchor":"projects","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"linen","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div id="projects" class="wp-block-group alignfull has-linen-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"hearth-eyebrow"} --><p class="hearth-eyebrow"><?php esc_html_e( 'Portfolio', 'hearth' ); ?></p><!-- /wp:paragraph -->
			<!-- wp:heading --><h2 class="wp-block-heading"><?php esc_html_e( 'Recent projects', 'hearth' ); ?></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"className":"hearth-more"} --><p class="hearth-more"><a href="#"><?php esc_html_e( 'View all projects', 'hearth' ); ?></a></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":"2rem"}},"layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
		<?php foreach ( $hearth_projects as $hearth_project ) : ?>
		<!-- wp:group {"className":"hearth-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group hearth-card">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo hearth_img( $hearth_project[0] ); ?>" alt="<?php echo esc_attr( $hearth_project[1] ); ?>"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html( $hearth_project[1] ); ?></h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"hearth-more"} --><p class="hearth-more"><a href="#"><?php echo esc_html( $hearth_project[2] ); ?> →</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
