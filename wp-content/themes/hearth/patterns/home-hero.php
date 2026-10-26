<?php
/**
 * Title: Home – Hero
 * Slug: hearth/home-hero
 * Categories: hearth
 * Description: Split hero with a tall photo and the studio introduction.
 *
 * @package hearth
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:image {"sizeSlug":"full","className":"hearth-hero"} -->
			<figure class="wp-block-image size-full hearth-hero"><img src="<?php echo hearth_img( 'hero.jpg' ); ?>" alt="<?php esc_attr_e( 'Sunlit living room with linen sofa and oak side table', 'hearth' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","className":"hearth-hero-text"} -->
		<div class="wp-block-column is-vertically-aligned-center hearth-hero-text">
			<!-- wp:paragraph {"className":"hearth-eyebrow"} -->
			<p class="hearth-eyebrow"><?php esc_html_e( 'Interior design studio', 'hearth' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading"><?php echo wp_kses_post( __( 'Homes made for <em>slow</em> mornings.', 'hearth' ) ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'We design warm, personal interiors that hold the everyday: the hurried school-day breakfast, the long Sunday on the sofa, and everything in between. Each space starts with how you want to live and ends with a home that feels unmistakably yours.', 'hearth' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'New build, renovation or a single room in need of love, we guide every decision from first sketch to final styling.', 'hearth' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#inquire"><?php esc_html_e( 'Start your project', 'hearth' ); ?></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
