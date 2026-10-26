<?php
/**
 * Title: Why we made it – Timeline
 * Slug: humann/timeline
 * Categories: humann
 * Description: Scroll-drawn vertical timeline: 1998, 2009, Today.
 *
 * @package humann
 */

$humann_events = array(
	array(
		'year'  => '1998',
		'label' => __( 'Nitric oxide discovery', 'humann' ),
		'img'   => 'tl-1.webp',
		'alt'   => __( 'Laboratory research footage', 'humann' ),
		'dim'   => '',
		'text'  => __( 'In 1998, the discovery of what nitric oxide does for the human body won the Nobel Prize in Physiology and Medicine and was awarded to Dr. Ferid Murad, one of the scientists behind its discovery.', 'humann' ),
	),
	array(
		'year'  => '2009',
		'label' => __( 'Our first product', 'humann' ),
		'img'   => 'tl-2.webp',
		'alt'   => __( 'BeetElite product footage', 'humann' ),
		'dim'   => __( 'That same discovery led to a nitric oxide research program at the University of Texas.', 'humann' ),
		'text'  => __( 'And in 2009, Humann came to life.', 'humann' ),
	),
	array(
		'year'  => __( 'Today', 'humann' ),
		'label' => __( 'Millions of happy customers', 'humann' ),
		'img'   => 'tl-3.webp',
		'alt'   => __( 'Humann product range', 'humann' ),
		'dim'   => __( 'Fifteen years later, the science hasn\'t changed.', 'humann' ),
		'text'  => __( 'Our commitment to it hasn\'t either.', 'humann' ),
	),
);
?>
<!-- wp:html -->
<section class="hm-tl" data-hm-timeline aria-label="<?php esc_attr_e( 'Timeline', 'humann' ); ?>">
	<div class="hm-tl__line" aria-hidden="true"><span data-hm-tl-fill></span></div>
	<ol class="hm-tl__list">
		<?php foreach ( $humann_events as $humann_e ) : ?>
		<li class="hm-tl__item hm-reveal">
			<div class="hm-tl__meta">
				<p class="hm-tl__year"><?php echo esc_html( $humann_e['year'] ); ?></p>
				<p class="hm-label"><?php echo esc_html( $humann_e['label'] ); ?></p>
			</div>
			<span class="hm-tl__dot" aria-hidden="true"></span>
			<div class="hm-tl__body">
				<img src="<?php echo humann_img( $humann_e['img'] ); ?>" alt="<?php echo esc_attr( $humann_e['alt'] ); ?>" width="432" height="243" loading="lazy">
				<p>
					<?php if ( $humann_e['dim'] ) : ?>
					<span class="hm-c-grey"><?php echo esc_html( $humann_e['dim'] ); ?></span><br>
					<?php endif; ?>
					<?php echo esc_html( $humann_e['text'] ); ?>
				</p>
			</div>
		</li>
		<?php endforeach; ?>
	</ol>
</section>
<!-- /wp:html -->
