<?php
/**
 * Title: How it started – horizontal scroll with heartbeat
 * Slug: humann/how-it-started
 * Categories: humann
 * Description: Pinned section that scrolls sideways; the heartbeat line traces as you go, then turns into blood vessels.
 *
 * Element positions are the Figma coordinates (design frame 8793 × 900) and are scaled by --u in CSS.
 *
 * @package humann
 */
?>
<!-- wp:html -->
<section class="hm-hscroll" id="how-it-started" data-hm-hscroll aria-label="<?php esc_attr_e( 'How it started', 'humann' ); ?>">
	<div class="hm-hscroll__sticky">
		<div class="hm-hscroll__track" data-hm-track style="--tw:8793">
			<img class="hm-abs hm-deco" style="--x:0;--y:-4;--w:9625;--h:904" src="<?php echo humann_img( 'story-bg.webp' ); ?>" alt="" aria-hidden="true">

			<img class="hm-abs hm-story__photo" style="--x:72;--y:103;--w:519;--h:741" src="<?php echo humann_img( 'story-photo.webp' ); ?>" alt="<?php esc_attr_e( 'Person checking their pulse after a run', 'humann' ); ?>" loading="lazy">

			<div class="hm-abs hm-story__text" style="--x:665;--y:103;--w:510">
				<h2 class="hm-h hm-mix hm-c-charcoal"><?php esc_html_e( 'America has been looking at cardiovascular health', 'humann' ); ?> <b><?php esc_html_e( 'all wrong.', 'humann' ); ?></b></h2>
				<p class="hm-lead hm-c-grey" style="max-width:calc(375 * var(--u))"><?php esc_html_e( 'Some say it\'s just about your heart. Or that it’s only about older people', 'humann' ); ?></p>
			</div>

			<div class="hm-abs hm-deco hm-trace" data-hm-trace style="--x:675;--y:451;--w:3076;--h:421">
				<img src="<?php echo humann_img( 'story-heartbeat.webp' ); ?>" alt="" aria-hidden="true">
			</div>

			<h2 class="hm-abs hm-h hm-mix hm-c-grey" style="--x:2496;--y:662;--w:461"><?php esc_html_e( 'But the real story isn’t just about', 'humann' ); ?> <b><?php esc_html_e( 'the heart —', 'humann' ); ?></b></h2>

			<img class="hm-abs hm-deco" style="--x:3617;--y:637;--w:1052;--h:269" src="<?php echo humann_img( 'story-arrow.webp' ); ?>" alt="" aria-hidden="true">
			<img class="hm-abs hm-deco hm-pulse-dot" style="--x:3750;--y:446;--w:10;--h:10" src="<?php echo humann_img( 'story-dot.webp' ); ?>" alt="" aria-hidden="true">

			<div class="hm-abs hm-deco hm-trace" data-hm-trace style="--x:3759;--y:-21;--w:3523;--h:954">
				<img src="<?php echo humann_img( 'story-vessels.webp' ); ?>" alt="" aria-hidden="true">
			</div>

			<div class="hm-abs hm-story__text" style="--x:4508;--y:348;--w:649">
				<p class="hm-kicker hm-c-silver"><?php esc_html_e( 'Regardless of age,', 'humann' ); ?></p>
				<h3 class="hm-h hm-mix hm-c-grey"><?php esc_html_e( 'It is all about the', 'humann' ); ?> <b><?php esc_html_e( '60,000 miles of blood vessels', 'humann' ); ?></b> <?php esc_html_e( 'that help enable human health.', 'humann' ); ?></h3>
			</div>

			<div class="hm-abs hm-story__text" style="--x:5302;--y:348;--w:649">
				<p class="hm-kicker hm-kicker--sm hm-c-silver"><?php esc_html_e( 'So why do we keep looking past it and focusing on things like protein powders and another greens powder -', 'humann' ); ?></p>
				<h3 class="hm-h hm-mix hm-c-grey"><?php esc_html_e( 'but not', 'humann' ); ?> <b><?php esc_html_e( 'the most important system in the human body?', 'humann' ); ?></b></h3>
			</div>

			<div class="hm-abs hm-story__text" style="--x:6109;--y:348;--w:678">
				<p class="hm-kicker hm-kicker--sm hm-c-silver"><?php esc_html_e( 'Because it\'s the biggest blind spot in how we think about our health.', 'humann' ); ?></p>
				<h3 class="hm-h hm-mix hm-c-grey"><?php esc_html_e( 'It\'s something already happening to you —', 'humann' ); ?> <b><?php esc_html_e( 'whether you\'re paying attention or not.', 'humann' ); ?></b></h3>
			</div>

			<img class="hm-abs hm-story__runner" style="--x:6778;--y:-9;--w:996;--h:925" src="<?php echo humann_img( 'story-runner.webp' ); ?>" alt="<?php esc_attr_e( 'Runner mid-stride', 'humann' ); ?>" loading="lazy">

			<h3 class="hm-abs hm-h hm-mix hm-c-grey" style="--x:8018;--y:378;--w:550"><?php esc_html_e( 'You can\'t', 'humann' ); ?> <b><?php esc_html_e( 'out-diet', 'humann' ); ?></b> <?php esc_html_e( 'it.', 'humann' ); ?><br><?php esc_html_e( 'You can\'t', 'humann' ); ?> <b><?php esc_html_e( 'out-train', 'humann' ); ?></b> <?php esc_html_e( 'it.', 'humann' ); ?></h3>
		</div>
	</div>
</section>
<!-- /wp:html -->
