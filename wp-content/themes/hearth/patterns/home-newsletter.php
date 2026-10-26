<?php
/**
 * Title: Home – Newsletter
 * Slug: hearth/home-newsletter
 * Categories: hearth
 * Description: Full-width photo banner with an email sign-up.
 *
 * @package hearth
 */
?>
<!-- wp:cover {"url":"<?php echo hearth_img( 'news.jpg' ); ?>","dimRatio":60,"overlayColor":"espresso","minHeight":560,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-espresso-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo hearth_img( 'news.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"align":"center","className":"hearth-eyebrow","textColor":"cream"} --><p class="has-text-align-center hearth-eyebrow has-cream-color has-text-color"><?php esc_html_e( 'The Hearth letter', 'hearth' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","textColor":"cream"} --><h2 class="wp-block-heading has-text-align-center has-cream-color has-text-color"><?php echo wp_kses_post( __( 'Design inspiration, <em>once a month</em>.', 'hearth' ) ); ?></h2><!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","textColor":"cream"} --><p class="has-text-align-center has-cream-color has-text-color"><?php esc_html_e( 'Project reveals, sourcing finds and practical tips for making home feel calmer. New subscribers get our favourite paint palette as a welcome gift.', 'hearth' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:html -->
	<form class="hearth-signup" action="#" method="post" onsubmit="return false;" aria-label="<?php esc_attr_e( 'Newsletter sign-up', 'hearth' ); ?>">
		<label class="screen-reader-text" for="hearth-email"><?php esc_html_e( 'Email address', 'hearth' ); ?></label>
		<input id="hearth-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Your email address', 'hearth' ); ?>" required>
		<button type="submit"><?php esc_html_e( 'Sign up', 'hearth' ); ?></button>
	</form>
	<!-- /wp:html -->
</div></div>
<!-- /wp:cover -->
