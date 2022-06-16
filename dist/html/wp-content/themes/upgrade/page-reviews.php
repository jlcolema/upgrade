<?php get_header(); ?>

	<div class="section s-reviews-grid">

		<div class="inner-wrap s-inner-wrap s-reviews-grid__inner-wrap">

			<div class="c-reviews-grid">

				<h1 class="c-reviews-grid__headline"><?php the_field( 'reviews_headline' ); ?></h1>

				<p class="c-reviews-grid__subhead"><?php the_field( 'reviews_subhead' ); ?></p>

				<div class="c-reviews-grid__widget">

					<div class="c-reviews-grid__trustpilot-widget trustpilot-widget" data-locale="en-US" data-template-id="539adbd6dec7e10e686debee" data-businessunit-id="5a42bb96b894c904ac6f3662" data-style-height="500px" data-style-width="100%" data-tags=" " data-stars="4,5" data-schema-type="Organization">

						<a href="https://www.trustpilot.com/review/upgrade.com" target="_blank">Trustpilot</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- Take a Step Toward Your Goals -->

	<div class="section s-take-a-step">

		<div class="inner-wrap s-inner-wrap s-take-a-step__inner-wrap">

			<div class="c-take-a-step">

				<h2 class="c-take-a-step__headline"><?php the_field( 'reviews_need_to_name_five_headline' ); ?></h2>

				<div class="c-take-a-step__detail">

					<?php the_field( 'reviews_need_to_name_five_detail' ); ?>

				</div>

			</div>

			<?php if ( get_field( 'reviews_need_to_name_five_background_image' ) ) : ?>

				<picture class="c-take-a-step__picture">

					<source srcset="<?php the_field( 'reviews_need_to_name_five_background_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php the_field( 'reviews_need_to_name_five_background_image' ); ?>" alt="A very nice description of the image" class="c-take-a-step__image">

				</picture>

			<?php endif; ?>

		</div>

	</div>

	<?php /* Check Your Rate */ ?>

	<?php get_template_part( 'inc/section-check-your-rate', '' ); ?>

<?php get_footer();
