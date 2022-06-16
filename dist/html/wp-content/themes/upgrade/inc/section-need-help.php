
<div class="section s-ask-us-anything">

	<div class="inner-wrap s-inner-wrap s-ask-us-anything__inner-wrap">

		<div class="c-ask-us-anything">

			<h2 class="c-ask-us-anything__header">Need help?</h2>

			<?php if ( get_field( 'section_need_help_detail' ) ) : ?>

				<div class="c-ask-us-anything__description">

					<?php the_field( 'section_need_help_detail' ); ?>

				</div>

			<?php endif; ?>

			<div class="c-ask-us-anything__more">

				<?php if ( get_field( 'section_need_help_button_url' ) ) : ?>

					<a href="<?php the_field( 'section_need_help_button_url' ); ?>" class="c-ask-us-anything__more-link">

				<?php endif; ?>

					<?php if ( get_field( 'section_need_help_button_label' ) ) : ?>

						<?php the_field( 'section_need_help_button_label' ); ?>

					<?php endif; ?>

				</a>

			</div>

		</div>

		<picture class="c-ask-us-anything__picture">

			<source srcset="<?php the_field( 'section_need_help_background_image' ); ?>" media="(min-width: 1000px)">

			<img srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/small-screen-image-placeholder.png" alt="A very nice description of the image" class="c-ask-us-anything__img">

		</picture>

	</div>

</div>
