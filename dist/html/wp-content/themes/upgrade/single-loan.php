<?php get_header(); ?>

	<?php /* Hero */ ?>

	<?php get_template_part( 'inc/section-hero', '' ); ?>

	<?php /* Subnavigation */ ?>

	<?php get_template_part( 'inc/section-subnavigation', '' ); ?>

	<?php /* Why */ ?>

	<?php get_template_part( 'inc/section-why', '' ); ?>

	<?php /* Green Area with Icons */ ?>

	<?php if ( have_rows( 'loan_need_to_name_two_list' ) ) : ?>

		<div class="section s-green-area">

			<div class="inner-wrap s-inner-wrap s-green-area__inner-wrap">

				<div class="c-green-area">

					<h2 class="c-green-area__header"><?php the_field( 'loan_need_to_name_two_headline' ); ?></h2>

					<p class="c-green-area__subhead"><?php the_field( 'loan_need_to_name_two_subhead' ); ?></p>

					<ul class="c-green-area__list">

						<?php while( have_rows( 'loan_need_to_name_two_list' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-green-area__item">

								<div class="c-green-area__icon">

									<img src="<?php the_sub_field( 'icon' ); ?>" alt="<?php the_sub_field( 'title' ); ?>" class="c-green-area__image" />

								</div>

								<h3 class="c-green-area__title"><?php the_sub_field( 'title' ); ?></h3>

								<div class="c-green-area__detail">

									<?php the_sub_field( 'description' ); ?>

								</div>

							</li>

						<?php endwhile; ?>

					</ul>

				</div>

			</div>

		</div>

	<?php endif; ?>

	<?php /* How It Works */ ?>

	<?php get_template_part( 'inc/section-how-it-works', '' ); ?>

	<?php /* Flexibility and Customization */ ?>

	<?php get_template_part( 'inc/section-flexibility-and-customization', '' ); ?>

	<?php /* Testimonial */ ?>

	<?php

		$testimonial = get_field( 'loan_from_our_customers_testimonial' );

	?>

	<?php if ( $testimonial ) : ?>

		<?php

			// override $post

			$post = $testimonial;

			setup_postdata( $post );

		?>

		<div class="section s-testimonial">

			<div class="inner-wrap s-inner-wrap s-testimonial__inner-wrap">

				<h2 class="c-testimonial__header">From Our Customers</h2>

				<blockquote class="c-testimonial__quote">

					<?php the_field( 'testimonial_quote' ); ?>

					<cite class="c-testimonial__source">

						<b class="c-testimonial__name">

							<?php if ( get_field( 'testimonial_display_name' ) ) : ?>

								<?php the_field( 'testimonial_display_name' ); ?><?php else : ?><?php the_title(); ?><?php endif; ?></b>,

						<?php $testimonial_loan_type = get_field( 'testimonial_loan_type' ); ?>

						<?php if ( $testimonial_loan_type ) : ?>

							<?php

								$post = $testimonial_loan_type;

								setup_postdata( $post );

							?>

							<?php the_title(); ?>

							<?php

								// Note: reset the $post object so the rest of the page works correctly

								wp_reset_postdata();

							?>

						<?php endif; ?>

					</cite>

				</blockquote>

			</div>

		</div>

		<?php

			// Note: reset the $post object so the rest of the page works correctly

			wp_reset_postdata();

		?>

	<?php endif; ?>

	<?php /* Reviews */ ?>

	<?php get_template_part( 'inc/section-reviews', '' ); ?>

	<?php /* FAQs */ ?>

	<?php get_template_part( 'inc/section-faqs', '' ); ?>

	<?php /* Check Your Rate */ ?>

	<?php /* get_template_part( 'inc/section-check-your-rate', '' ); */ ?>

<?php get_footer();
