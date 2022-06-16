
<?php

	// Need to simplify this. For now, each page has it's own calls.

?>

<?php if ( is_page( 'home' ) ) : ?>

	<?php

		$home_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'home_footnotes_list', $home_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'home_footnotes_list', $home_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_page( 'personal-loans' ) ) : ?>

	<?php

		$personal_loans_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'personal_loans_footnotes_list', $personal_loans_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'personal_loans_footnotes_list', $personal_loans_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_singular( 'loan' ) ) : ?>

	<?php

		$loan_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'loan_footnotes_list', $loan_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'loan_footnotes_list', $loan_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_page( 'personal-credit-line' ) ) : ?>

	<?php

		$personal_credit_line_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'personal_credit_line_footnotes_list', $personal_credit_line_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'personal_credit_line_footnotes_list', $personal_credit_line_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_page( 'credit-health' ) ) : ?>

	<?php

		$credit_health_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'credit_health_footnotes_list', $credit_health_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'credit_health_footnotes_list', $credit_health_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_page( 'about-us' ) ) : ?>

	<?php

		$about_us_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'about_us_footnotes_list', $about_us_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'about_us_footnotes_list', $about_us_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_page( 'press-room' ) ) : ?>

	<?php

		$press_room_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'press_room_footnotes_list', $press_room_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'press_room_footnotes_list', $press_room_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_singular( 'release' ) ) : ?>

	<?php

		$release_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'release_footnotes_list', $release_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'release_footnotes_list', $release_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_page( 'reviews' ) ) : ?>

	<?php

		$reviews_footnotes_list = get_queried_object();

	?>

	<?php if ( have_rows( 'reviews_footnotes_list', $reviews_footnotes_list->ID ) ) : ?>

		<div class="c-footnotes">

			<?php while ( have_rows( 'reviews_footnotes_list', $reviews_footnotes_list->ID ) ) : the_row(); ?>

				<div class="c-footnotes__item">

					<?php the_sub_field( 'footnote', $footnote->ID ); ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php endif; ?>
