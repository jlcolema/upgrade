<?php if ( is_page( 'home' ) ) : ?>

	<div id="next" class="section s-how-it-works s-how-it-works--no-background">

		<div class="inner-wrap s-inner-wrap s-how-it-works__inner-wrap">

			<div class="c-how-it-works c-how-it-works--has-icons">

				<h2 class="c-how-it-works__header">How It Works</h2>

				<?php if ( have_rows( 'home_how_it_works_steps' ) ) : ?>

					<ol class="c-how-it-works__list c-how-it-works__list--has-horizontal-layout">

						<?php while( have_rows( 'home_how_it_works_steps' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-how-it-works__item">

								<div class="c-how-it-works__icon">

									<img src="<?php the_sub_field( 'icon' ); ?>" alt="<?php the_sub_field( 'title' ); ?>" class="c-how-it-works__image" />

								</div>

								<h3 class="c-how-it-works__title"><?php the_sub_field( 'title' ); ?></h3>

								<div class="c-how-it-works__detail">

									<?php the_sub_field( 'description' ); ?>

								</div>

							</li>

						<?php endwhile; ?>

					</ol>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php endif; ?>

<?php if ( is_page( 'personal-loans' ) ) : ?>

	<div class="section s-how-it-works">

		<div class="inner-wrap s-inner-wrap s-how-it-works__inner-wrap">

			<div class="c-how-it-works">

				<h2 class="c-how-it-works__header">How It Works</h2>

				<?php if ( have_rows( 'personal_loans_how_it_works_steps' ) ) : ?>

					<ol class="c-how-it-works__list">

						<?php while( have_rows( 'personal_loans_how_it_works_steps' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-how-it-works__item">

								<h3 class="c-how-it-works__title"><?php the_sub_field( 'title' ); ?></h3>

								<div class="c-how-it-works__detail">

									<?php the_sub_field( 'description' ); ?>

								</div>

							</li>

						<?php endwhile; ?>

					</ol>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php endif; ?>

<?php if ( is_singular( 'loan' ) ) : ?>

	<div class="section s-how-it-works">

		<div class="inner-wrap s-inner-wrap s-how-it-works__inner-wrap">

			<div class="c-how-it-works">

				<h2 class="c-how-it-works__header">How it Works</h2>

				<?php if ( have_rows( 'loan_how_it_works_steps' ) ) : ?>

					<ol class="c-how-it-works__list">

						<?php while( have_rows( 'loan_how_it_works_steps' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-how-it-works__item">

								<h3 class="c-how-it-works__title"><?php the_sub_field( 'title' ); ?></h3>

								<div class="c-how-it-works__detail">

									<?php the_sub_field( 'description' ); ?>

								</div>

							</li>

						<?php endwhile; ?>

					</ol>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php endif; ?>

<?php if ( is_page( 'personal-credit-line' ) ) : ?>

	<div class="section s-how-it-works">

		<div class="inner-wrap s-inner-wrap s-how-it-works__inner-wrap">

			<div class="c-how-it-works <?php if ( get_field( 'personal_credit_line_how_it_works_headline') ) : ?>c-how-it-works--has-description<?php endif; ?>">

				<h2 class="c-how-it-works__header">How it Works</h2>

				<?php if ( get_field( 'personal_credit_line_how_it_works_headline') ) : ?>

					<p class="c-how-it-works__description"><?php the_field( 'personal_credit_line_how_it_works_headline' ); ?></p>

				<?php endif; ?>

				<?php if ( have_rows( 'personal_credit_line_how_it_works_steps' ) ) : ?>

					<ol class="c-how-it-works__list <?php if ( get_field( 'personal_credit_line_how_it_works_display_last_step_with_a_checkmark' ) ) : ?>c-how-it-works__list--has-last-checkmark<?php endif; ?>">

						<?php while( have_rows( 'personal_credit_line_how_it_works_steps' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-how-it-works__item">

								<h3 class="c-how-it-works__title"><?php the_sub_field( 'title' ); ?></h3>

								<div class="c-how-it-works__detail">

									<?php the_sub_field( 'description' ); ?>

								</div>

							</li>

						<?php endwhile; ?>

					</ol>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php endif; ?>
