<?php if ( is_singular( 'loan' ) ) : ?>

	<div class="section s-need-to-name s-why">

		<div class="inner-wrap s-inner-wrap s-need-to-name__inner-wrap s-why__inner-wrap">

			<div class="c-need-to-name c-why <?php if ( get_field( 'loan_need_to_name_one_subhead' ) ) : ?>c-need-to-name--has-description c-why--has-description<?php endif; ?>">

				<h2 class="c-need-to-name__header c-why__header"><?php the_field( 'loan_need_to_name_one_headline' ); ?></h2>

				<?php if ( get_field( 'loan_need_to_name_one_subhead' ) ) : ?>

					<p class="c-need-to-name__description c-why__description"><?php the_field( 'loan_need_to_name_one_subhead' ); ?></p>

				<?php endif; ?>

				<?php if ( have_rows( 'loan_need_to_name_one_list' ) ) : ?>

					<ul class="c-need-to-name__list c-why__list">

						<?php while( have_rows( 'loan_need_to_name_one_list' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-need-to-name__item c-why__item">

								<div class="c-need-to-name__icon-title-wrap c-why__icon-title-wrap">

									<div class="c-need-to-name__icon c-why__icon">

										<img src="<?php the_sub_field( 'icon' ); ?>" alt="<?php the_sub_field( 'title' ); ?>" class="c-need-to-name__image c-why__image" />

									</div>

									<h3 class="c-need-to-name__title c-why__title"><?php the_sub_field( 'title' ); ?></h3>

								</div>

								<div class="c-need-to-name__detail c-why__detail">

									<?php the_sub_field( 'description' ); ?>

								</div>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php endif; ?>

<?php if ( is_page( 'personal-credit-line' ) ) : ?>

	<div id="next" class="section s-need-to-name s-why">

		<div class="inner-wrap s-inner-wrap s-need-to-name__inner-wrap s-why__inner-wrap">

			<div class="c-need-to-name c-why <?php if ( get_field( 'persona_credit_line_need_to_name_one_subhead' ) ) : ?>c-need-to-name--has-description c-why--has-description<?php endif; ?>">

				<h2 class="c-need-to-name__header c-why__header"><?php the_field( 'persona_credit_line_need_to_name_one_headline' ); ?></h2>

				<?php if ( get_field( 'persona_credit_line_need_to_name_one_subhead' ) ) : ?>

					<p class="c-need-to-name__description c-why__description"><?php the_field( 'persona_credit_line_need_to_name_one_subhead' ); ?></p>

				<?php endif; ?>

				<?php if ( have_rows( 'persona_credit_line_need_to_name_one_list' ) ) : ?>

					<ul class="c-need-to-name__list c-why__list c-need-to-name__list--has-three-columns c-why__list--has-three-columns">

						<?php while( have_rows( 'persona_credit_line_need_to_name_one_list' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-need-to-name__item c-why__item">

								<div class="c-need-to-name__icon-title-wrap c-why__icon-title-wrap">

									<div class="c-need-to-name__icon c-why__icon">

										<img src="<?php the_sub_field( 'icon' ); ?>" alt="<?php the_sub_field( 'title' ); ?>" class="c-need-to-name__image c-why__image" />

									</div>

									<h3 class="c-need-to-name__title c-why__title"><?php the_sub_field( 'title' ); ?></h3>

								</div>

								<div class="c-need-to-name__detail c-why__detail">

									<?php the_sub_field( 'description' ); ?>

								</div>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php endif; ?>
