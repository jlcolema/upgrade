<?php get_header(); ?>

	<?php /* Hero */ ?>

	<?php get_template_part( 'inc/section-hero', '' ); ?>

	<?php /* Subnavigation */ ?>

	<?php get_template_part( 'inc/section-subnavigation', '' ); ?>

	<!-- Take a Step Towards Your Goals (maybe name this section Loans Overview) -->

	<div class="section s-need-to-name s-loans-overview">

		<div class="inner-wrap s-inner-wrap s-need-to-name__inner-wrap s-loans-overview__inner-wrap">

			<div class="c-need-to-name c-loans-overview c-need-to-name--is-loans-listing">

				<h2 class="c-need-to-name__header c-loans-overview__header"><?php the_field( 'personal_loans_need_to_name_one_headline' ); ?></h2>

				<p class="c-need-to-name__description c-loans-overview__description"><?php the_field( 'personal_loans_need_to_name_one_subhead' ); ?></p>

				<ul class="c-need-to-name__list c-loans-overview__list">

					<?php

						$loan_settings = array(

							'numberposts'	=> -1,
							'post_type'		=> 'loan',
							'orderby'		=> 'date', // 'menu_order'
							'post_status'	=> 'publish',
							'order'			=> 'ASC' // 'ASC'

						);

						$loans = get_posts( $loan_settings );

					?>

					<?php foreach ( $loans as $loan ) : ?>

						<?php

							/* Icon
							--------------------------------------*/

							$loan_icon_attachment_id = get_field( 'loan_overview_icon', $loan->ID );

							$loan_icon_size_full = "full";

							$loan_icon = wp_get_attachment_image_src( $loan_icon_attachment_id, $loan_icon_size_full );

							/* Short Description
							--------------------------------------*/

							$loan_detail = get_field( 'loan_overview_short_description', $loan->ID );

						?>

						<li class="c-need-to-name__item c-loans-overview__item">

							<div class="c-need-to-name__icon-title-wrap c-loans-overview__icon-title-wrap">

								<div class="c-need-to-name__icon c-loans-overview__icon">

									<img src="<?php echo $loan_icon[0]; ?>" alt="<?php echo $loan->post_title; ?>" class="c-need-to-name__image c-loans-overview__image" />

								</div>

								<h3 class="c-need-to-name__title c-loans-overview__title"><?php echo $loan->post_title; ?></h3>

							</div>

							<div class="c-need-to-name__detail c-loans-overview__detail">

								<?php echo $loan_detail; ?>

							</div>

							<div class="c-need-to-name__more c-loans-overview__more">

								<a href="<?php echo get_permalink( $loan->ID ); ?>" class="c-need-to-name__more-link c-loans-overview__more-link">Learn More</a>

							</div>

						</li>

					<?php endforeach; ?>

				</ul>

			</div>

		</div>

	</div>

	<?php /* How It Works */ ?>

	<?php get_template_part( 'inc/section-how-it-works', '' ); ?>

	<?php /* Flexibility and Customization */ ?>

	<?php get_template_part( 'inc/section-flexibility-and-customization', '' ); ?>

	<?php /* Reviews */ ?>

	<?php get_template_part( 'inc/section-reviews', '' ); ?>

	<?php /* FAQs */ ?>

	<?php get_template_part( 'inc/section-faqs', '' ); ?>

	<?php /* Check Your Rate */ ?>

	<?php get_template_part( 'inc/section-check-your-rate', '' ); ?>

<?php get_footer(); ?>
