<?php
/**
 * Title: The proof – Product, advisory board, clinical validation
 * Slug: humann/the-proof
 * Categories: humann
 * Description: Light section with parallax product, auto-rotating advisory board carousel and stats.
 *
 * @package humann
 */

$humann_board = array(
	array( 'adv-1.webp', 'Dr. John Ivy, PhD', __( 'Teresa Lozano Long Endowed Chair Emeritus at the University of Texas', 'humann' ) ),
	array( 'adv-2.webp', 'Dr. Harold Schmitz, PhD', __( 'Senior Scholar at UC Davis, Pioneer in Nitric Oxide & Vascular Biology Research', 'humann' ) ),
	array( 'adv-3.webp', 'Dr. Christopher Davis, MD, FACC', __( 'Triple Board - Certified Cardiologist', 'humann' ) ),
	array( 'adv-4.webp', 'Dr. Molly Bray', __( 'Susan T. Jastrow Human Ecology Chair for Excellence in Nutritional Sciences, University of Texas', 'humann' ) ),
	array( 'adv-5.webp', 'Penny Kris-Etherton, PhD, RD', __( 'Professor Emeritus Department of Nutritional Sciences, Penn State University', 'humann' ) ),
	array( 'adv-6.webp', 'Dr. John P. Cooke, MD, PhD', __( 'Chair of the Department of Cardiovascular Sciences at the Houston Methodist Research Institute', 'humann' ) ),
);
?>
<!-- wp:html -->
<section class="hm-proof" id="the-proof" style="background-image:url('<?php echo humann_img( 'proof-bg.webp' ); ?>')" aria-label="<?php esc_attr_e( 'The proof', 'humann' ); ?>">
	<div class="hm-proof__intro">
		<h2 class="hm-h hm-mix hm-c-charcoal hm-reveal"><?php esc_html_e( 'We didn\'t build this business', 'humann' ); ?> <b><?php esc_html_e( 'to sell supplements.', 'humann' ); ?></b></h2>
		<div class="hm-proof__product" data-hm-parallax="0.12">
			<img src="<?php echo humann_img( 'proof-product.webp' ); ?>" alt="<?php esc_attr_e( 'SuperBeets Heart Chews canister', 'humann' ); ?>" width="773" height="849" loading="lazy">
		</div>
	</div>

	<div class="hm-proof__board">
		<div class="hm-center hm-reveal">
			<h2 class="hm-h hm-mix hm-c-charcoal"><b><?php esc_html_e( 'We built it with leading scientific experts', 'humann' ); ?></b> <?php esc_html_e( 'on staff from day one', 'humann' ); ?></h2>
			<p class="hm-lead hm-c-grey"><?php esc_html_e( 'because we held ourselves to a standard that didn’t exist in the industry - and set the bar for how a supplement company should operate. And when you do things right from the start, you get noticed. First, by the doctors. They recommended us thirteen years before we ever sat on a retail shelf.', 'humann' ); ?></p>
		</div>
		<div class="hm-carousel" data-hm-carousel aria-label="<?php esc_attr_e( 'Scientific advisory board', 'humann' ); ?>">
			<ul class="hm-carousel__track" data-hm-carousel-track>
				<?php foreach ( $humann_board as $humann_m ) : ?>
				<li class="hm-card">
					<img src="<?php echo humann_img( $humann_m[0] ); ?>" alt="<?php echo esc_attr( $humann_m[1] ); ?>" width="280" height="347" loading="lazy">
					<p class="hm-card__name"><?php echo esc_html( $humann_m[1] ); ?></p>
					<p class="hm-card__role"><?php echo esc_html( $humann_m[2] ); ?></p>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="hm-proof__clinical">
		<div class="hm-center hm-reveal">
			<p class="hm-label hm-c-grey"><?php esc_html_e( 'Clinical Validation', 'humann' ); ?></p>
			<p class="hm-h2 hm-mix hm-c-charcoal"><?php esc_html_e( 'Today, thousands of medical practitioners and professionals trust us, and', 'humann' ); ?> <b><?php esc_html_e( 'SuperBeets is the #1 doctor, pharmacist, and cardiologist recommended beet brand', 'humann' ); ?></b> <?php esc_html_e( 'for heart health support, and the science kept pace with the trust.', 'humann' ); ?></p>
		</div>
		<div class="hm-stats hm-reveal">
			<div class="hm-stat">
				<p class="hm-stat__num" data-hm-count="8">8</p>
				<p class="hm-stat__label"><?php esc_html_e( 'Published Clinical Studies', 'humann' ); ?></p>
				<p class="hm-stat__desc"><?php esc_html_e( 'Rigorous double-blind, peer-reviewed clinical trials validating our cardiovascular support formulas.', 'humann' ); ?></p>
			</div>
			<div class="hm-stat">
				<p class="hm-stat__logo"><img src="<?php echo humann_img( 'bain.webp' ); ?>" alt="<?php esc_attr_e( 'Bain & Company', 'humann' ); ?>" width="222" height="34" loading="lazy"></p>
				<p class="hm-stat__label"><?php esc_html_e( 'Insurgent Brand Designation', 'humann' ); ?></p>
				<p class="hm-stat__desc"><?php esc_html_e( 'Officially recognized by Bain & Company as a leading insurgent brand disrupting the wellness category.', 'humann' ); ?></p>
			</div>
			<div class="hm-stat">
				<p class="hm-stat__num" data-hm-count="10">10</p>
				<p class="hm-stat__label"><?php esc_html_e( 'Consecutive Years on Inc. 5000', 'humann' ); ?></p>
				<p class="hm-stat__desc"><?php esc_html_e( 'A decade of continuous recognition as one of America’s fastest-growing private health companies.', 'humann' ); ?></p>
			</div>
		</div>
	</div>
</section>
<!-- /wp:html -->
