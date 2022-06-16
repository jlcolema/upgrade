<?php get_header(); ?>

	<?php /* Hero */ ?>

	<?php get_template_part( 'inc/section-hero', '' ); ?>

	<?php /* How It Works */ ?>

	<?php get_template_part( 'inc/section-how-it-works', '' ); ?>

	<!-- Need Help -->

	<div class="section s-need-help <?php if ( get_field( 'home_need_help_background_image' ) ) : ?>s-need-help--has-background-image<?php endif; ?>">

		<div class="inner-wrap s-inner-wrap s-need-help__inner-wrap">

			<div class="c-need-help">

				<h2 class="c-need-help__header">Need help?</h2>

				<?php if ( get_field( 'home_need_help_detail' ) ) : ?>

					<div class="c-need-help__description">

						<?php the_field( 'home_need_help_detail' ); ?>

					</div>

				<?php endif; ?>

				<?php if (

					get_field( 'home_need_help_button_url' )

					|| get_field( 'home_need_help_button_label' )

				) : ?>

					<div class="c-need-help__more">

						<?php if ( get_field( 'home_need_help_button_url' ) ) : ?>

							<a href="<?php the_field( 'home_need_help_button_url' ); ?>" class="c-need-help__more-link">

						<?php endif; ?>

							<?php if ( get_field( 'home_need_help_button_label' ) ) : ?>

								<?php the_field( 'home_need_help_button_label' ); ?>

							<?php endif; ?>

						<?php if ( get_field( 'home_need_help_button_url' ) ) : ?>

							</a>

						<?php endif; ?>

					</div>

				<?php endif; ?>

			</div>

			<?php if ( get_field( 'home_need_help_background_image' ) ) : ?>

				<picture class="c-need-help__picture">

					<source srcset="<?php the_field( 'home_need_help_background_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/small-screen-image-placeholder.png" alt="A very nice description of the image" class="c-need-help__img">

				</picture>

			<?php endif; ?>

		</div>

	</div>

<?php get_footer(); ?>
