<?php if ( is_page( 'personal-loans' ) ) : ?>

	<div class="section s-flexibility-and-customization">

		<div class="inner-wrap s-inner-wrap s-flexibility-and-customization__inner-wrap">

			<div class="c-flexibility-and-customization">

				<h2 class="c-flexibility-and-customization__header"><?php the_field( 'personal_loans_flexibility_and_customization_headline' ); ?></h2>

				<p class="c-flexibility-and-customization__description"><?php the_field( 'personal_loans_flexibility_and_customization_subhead' ); ?></p>

				<div class="c-flexibility-and-customization__overview">

					<div class="c-flexibility-and-customization__image">

						<img src="<?php the_field( 'personal_loans_flexibility_and_customization_image' ); ?>" alt="" class="c-flexibility-and-customization__img" />

					</div>

					<?php if ( have_rows( 'personal_loans_flexibility_and_customization_options' ) ) : ?>

						<ol class="c-flexibility-and-customization__list">

							<?php while( have_rows( 'personal_loans_flexibility_and_customization_options' ) ) : the_row(); ?>

								<?php

									// Variables

								?>

								<li class="c-flexibility-and-customization__item">

									<h3 class="c-flexibility-and-customization__title"><?php the_sub_field( 'title' ); ?></h3>

									<div class="c-flexibility-and-customization__detail">

										<?php the_sub_field( 'description' ); ?>

									</div>

								</li>

							<?php endwhile; ?>

						</ol>

					<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

<?php endif; ?>

<?php if ( is_singular( 'loan' ) ) : ?>

	<div class="section s-flexibility-and-customization">

		<div class="inner-wrap s-inner-wrap s-flexibility-and-customization__inner-wrap">

			<div class="c-flexibility-and-customization">

				<h2 class="c-flexibility-and-customization__header"><?php the_field( 'loan_flexibility_and_customization_headline' ); ?></h2>

				<p class="c-flexibility-and-customization__description"><?php the_field( 'loan_flexibility_and_customization_subhead' ); ?></p>

				<div class="c-flexibility-and-customization__overview">

					<div class="c-flexibility-and-customization__image">

						<img src="<?php the_field( 'loan_flexibility_and_customization_image' ); ?>" alt="" class="c-flexibility-and-customization__img" />

					</div>

					<?php if ( have_rows( 'loan_flexibility_and_customization_options' ) ) : ?>

						<ol class="c-flexibility-and-customization__list">

							<?php while( have_rows( 'loan_flexibility_and_customization_options' ) ) : the_row(); ?>

								<?php

									// Variables

								?>

								<li class="c-flexibility-and-customization__item">

									<h3 class="c-flexibility-and-customization__title"><?php the_sub_field( 'title' ); ?></h3>

									<div class="c-flexibility-and-customization__detail">

										<?php the_sub_field( 'description' ); ?>

									</div>

								</li>

							<?php endwhile; ?>

						</ol>

					<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

<?php endif; ?>

<?php if ( is_page( 'personal-credit-line' ) ) : ?>

	<div class="section s-flexibility-and-customization">

		<div class="inner-wrap s-inner-wrap s-flexibility-and-customization__inner-wrap">

			<div class="c-flexibility-and-customization">

				<h2 class="c-flexibility-and-customization__header"><?php the_field( 'personal_credit_line_flexibility_and_customization_headline' ); ?></h2>

				<div class="c-flexibility-and-customization__overview c-flexibility-and-customization__overview--without-titles">

					<?php /*

					<div class="c-flexibility-and-customization__image">

						<img src="<?php the_field( 'personal_credit_line_flexibility_and_customization_image' ); ?>" alt="" class="c-flexibility-and-customization__img" />

					</div>

					*/ ?>

					<?php if ( have_rows( 'personal_credit_line_flexibility_and_customization_media' ) ) : ?>

						<?php while ( have_rows ( 'personal_credit_line_flexibility_and_customization_media' ) ) : the_row(); ?>

							<?php if ( get_row_layout() == 'image_layout' ) : ?>

								<div class="c-flexibility-and-customization__image">

									<img src="<?php the_sub_field( 'image' ); ?>" alt="" class="c-flexibility-and-customization__img" />

								</div>

							<?php elseif ( get_row_layout() == 'video_layout' ) : ?>

								<div class="c-flexibility-and-customization__video">

									<div class="c-flexibility-and-customization__video-wrap">

										<?php the_sub_field( 'video_oembed' ); ?>

									</div>

								</div>

							<?php endif; ?>

						<?php endwhile; ?>

					<?php else : ?>

						<!-- No layouts found... -->

					<?php endif; ?>

					<?php /*

						<?php if ( have_rows( 'personal_credit_line_flexibility_and_customization_options' ) ) : ?>

							<ol class="c-flexibility-and-customization__list c-flexibility-and-customization__list--without-titles">

								<?php while( have_rows( 'personal_credit_line_flexibility_and_customization_options' ) ) : the_row(); ?>

									<?php

										// Variables

									?>

									<li class="c-flexibility-and-customization__item">

										<h3 class="c-flexibility-and-customization__title">Option </h3>

										<div class="c-flexibility-and-customization__detail">

											<?php the_sub_field( 'description' ); ?>

										</div>

									</li>

								<?php endwhile; ?>

							</ol>

						<?php endif; ?>

					*/ ?>

				</div>

			</div>

		</div>

	</div>

<?php endif; ?>
