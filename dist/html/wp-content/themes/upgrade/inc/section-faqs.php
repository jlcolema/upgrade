<?php if ( is_page( 'personal-loans' ) ) : ?>

	<div class="section s-faqs">

		<div class="inner-wrap s-inner-wrap s-faqs__inner-wrap">

			<h2 class="c-faqs__header">We&rsquo;re Here to Help</h2>

			<?php

				$faqs = get_field( 'personal_loans_were_here_to_help_faqs' );

			?>

			<?php if ( $faqs ) : ?>

				<ul class="c-faqs__list <?php if ( get_field( 'personal_loans_were_here_to_help_three_column_layout' ) ) : ?>c-faqs__list--has-three-columns<?php endif; ?>">

					<?php /* variable must be called $post (IMPORTANT) */ ?>

					<?php foreach ( $faqs as $post ) : ?>

						<li class="c-faqs__item">

							<h3 class="c-faqs__question"><?php the_title(); ?></h3>

							<div class="c-faqs__answer">

								<?php the_field( 'faq_answer' ); ?>

							</div>

						</li>

					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</ul>

			<?php endif; ?>

			<?php if (

				get_field( 'global_contact_information_email_addresses_support', 'option' )

				|| get_field( 'global_contact_information_numbers_telephone', 'option' )

				|| get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' )

				|| get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' )

				|| get_field( 'global_contact_information_availability_hours_from', 'option' )

				|| get_field( 'global_contact_information_availability_hours_to', 'option' )

				|| get_field( 'global_contact_information_availability_time_zone', 'option' )

			) : ?>

				<div class="h-card c-faqs__contact-information">

					<?php if ( get_field( 'global_contact_information_email_addresses_support', 'option' ) ) : ?>

						<div class="p-email c-faqs__email">

							<!-- Icon -->

							<a href="mailto:<?php the_field( 'global_contact_information_email_addresses_support', 'option'); ?>" class="c-faqs__email-link"><?php the_field( 'global_contact_information_email_addresses_support', 'option'); ?></a>

						</div>

					<?php endif; ?>

					<?php if (

						get_field( 'global_contact_information_numbers_telephone', 'option' )

						|| get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' )

						|| get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' )

						|| get_field( 'global_contact_information_availability_hours_from', 'option' )

						|| get_field( 'global_contact_information_availability_hours_to', 'option' )

						|| get_field( 'global_contact_information_availability_time_zone', 'option' )

					) : ?>

						<div class="p-tel c-faqs__tel">

							<!-- Icon -->

							<?php if ( get_field( 'global_contact_information_numbers_telephone', 'option' ) ) : ?>

								<span><?php the_field( 'global_contact_information_numbers_telephone', 'option' ); ?></span>

							<?php endif; ?>

							<span>

								<?php if ( get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' ) ) : ?>

									<?php the_field( 'global_contact_information_availability_days_of_the_week_from', 'option' ); ?>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' ) ) : ?>

									- <?php the_field( 'global_contact_information_availability_days_of_the_week_to', 'option' ); ?><?php endif; ?>,

							</span>

							<span>

								<?php if ( get_field( 'global_contact_information_availability_hours_from', 'option' ) ) : ?>

									<?php the_field( 'global_contact_information_availability_hours_from', 'option' ); ?>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_availability_hours_to', 'option' ) ) : ?>

									- <?php the_field( 'global_contact_information_availability_hours_to', 'option' ); ?><?php endif; ?><?php if ( get_field( 'global_contact_information_availability_time_zone', 'option' ) ) : ?>, <?php the_field( 'global_contact_information_availability_time_zone', 'option' ); ?>

								<?php endif; ?>

							</span>

						</div>

					<?php endif; ?>

				</div>

			<?php endif; ?>

		</div>

	</div>

<?php endif; ?>

<?php if ( is_singular( 'loan' ) ) : ?>

	<div class="section s-faqs">

		<div class="inner-wrap s-inner-wrap s-faqs__inner-wrap">

			<h2 class="c-faqs__header">We&rsquo;re Here to Help</h2>

			<?php

				$faqs = get_field( 'loan_were_here_to_help_faqs' );

			?>

			<?php if ( $faqs ) : ?>

				<ul class="c-faqs__list <?php if ( get_field( 'loan_were_here_to_help_three_column_layout' ) ) : ?>c-faqs__list--has-three-columns<?php endif; ?>">

					<?php /* variable must be called $post (IMPORTANT) */ ?>

					<?php foreach ( $faqs as $post ) : ?>

						<li class="c-faqs__item">

							<h3 class="c-faqs__question"><?php the_title(); ?></h3>

							<div class="c-faqs__answer">

								<?php the_field( 'faq_answer' ); ?>

							</div>

						</li>

					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</ul>

			<?php endif; ?>

			<?php if (

				get_field( 'global_contact_information_email_addresses_support', 'option' )

				|| get_field( 'global_contact_information_numbers_telephone', 'option' )

				|| get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' )

				|| get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' )

				|| get_field( 'global_contact_information_availability_hours_from', 'option' )

				|| get_field( 'global_contact_information_availability_hours_to', 'option' )

				|| get_field( 'global_contact_information_availability_time_zone', 'option' )

			) : ?>

				<div class="h-card c-faqs__contact-information">

					<?php if ( get_field( 'global_contact_information_email_addresses_support', 'option' ) ) : ?>

						<div class="p-email c-faqs__email">

							<!-- Icon -->

							<a href="mailto:<?php the_field( 'global_contact_information_email_addresses_support', 'option'); ?>" class="c-faqs__email-link"><?php the_field( 'global_contact_information_email_addresses_support', 'option'); ?></a>

						</div>

					<?php endif; ?>

					<?php if (

						get_field( 'global_contact_information_numbers_telephone', 'option' )

						|| get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' )

						|| get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' )

						|| get_field( 'global_contact_information_availability_hours_from', 'option' )

						|| get_field( 'global_contact_information_availability_hours_to', 'option' )

						|| get_field( 'global_contact_information_availability_time_zone', 'option' )

					) : ?>

						<div class="p-tel c-faqs__tel">

							<!-- Icon -->

							<?php if ( get_field( 'global_contact_information_numbers_telephone', 'option' ) ) : ?>

								<span><?php the_field( 'global_contact_information_numbers_telephone', 'option' ); ?></span>

							<?php endif; ?>

							<span>

								<?php if ( get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' ) ) : ?>

									<?php the_field( 'global_contact_information_availability_days_of_the_week_from', 'option' ); ?>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' ) ) : ?>

									- <?php the_field( 'global_contact_information_availability_days_of_the_week_to', 'option' ); ?><?php endif; ?>,

							</span>

							<span>

								<?php if ( get_field( 'global_contact_information_availability_hours_from', 'option' ) ) : ?>

									<?php the_field( 'global_contact_information_availability_hours_from', 'option' ); ?>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_availability_hours_to', 'option' ) ) : ?>

									- <?php the_field( 'global_contact_information_availability_hours_to', 'option' ); ?><?php endif; ?><?php if ( get_field( 'global_contact_information_availability_time_zone', 'option' ) ) : ?>, <?php the_field( 'global_contact_information_availability_time_zone', 'option' ); ?>

								<?php endif; ?>

							</span>

						</div>

					<?php endif; ?>

				</div>

			<?php endif; ?>

		</div>

	</div>

<?php endif; ?>

<?php if ( is_page( 'personal-credit-line' ) ) : ?>

	<div class="section s-faqs">

		<div class="inner-wrap s-inner-wrap s-faqs__inner-wrap">

			<h2 class="c-faqs__header">We&rsquo;re Here to Help</h2>

			<?php

				$faqs = get_field( 'personal_credit_line_were_here_to_help_faqs' );

			?>

			<?php if ( $faqs ) : ?>

				<ul class="c-faqs__list <?php if ( get_field( 'personal_credit_line_were_here_to_help_three_column_layout' ) ) : ?>c-faqs__list--has-three-columns<?php endif; ?>">

					<?php /* variable must be called $post (IMPORTANT) */ ?>

					<?php foreach ( $faqs as $post ) : ?>

						<li class="c-faqs__item">

							<h3 class="c-faqs__question"><?php the_title(); ?></h3>

							<div class="c-faqs__answer">

								<?php the_field( 'faq_answer' ); ?>

							</div>

						</li>

					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</ul>

			<?php endif; ?>

			<?php if (

				get_field( 'global_contact_information_email_addresses_support', 'option' )

				|| get_field( 'global_contact_information_numbers_telephone', 'option' )

				|| get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' )

				|| get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' )

				|| get_field( 'global_contact_information_availability_hours_from', 'option' )

				|| get_field( 'global_contact_information_availability_hours_to', 'option' )

				|| get_field( 'global_contact_information_availability_time_zone', 'option' )

			) : ?>

				<div class="h-card c-faqs__contact-information">

					<?php if ( get_field( 'global_contact_information_email_addresses_support', 'option' ) ) : ?>

						<div class="p-email c-faqs__email">

							<!-- Icon -->

							<a href="mailto:<?php the_field( 'global_contact_information_email_addresses_support', 'option'); ?>" class="c-faqs__email-link"><?php the_field( 'global_contact_information_email_addresses_support', 'option'); ?></a>

						</div>

					<?php endif; ?>

					<?php if (

						get_field( 'global_contact_information_numbers_telephone', 'option' )

						|| get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' )

						|| get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' )

						|| get_field( 'global_contact_information_availability_hours_from', 'option' )

						|| get_field( 'global_contact_information_availability_hours_to', 'option' )

						|| get_field( 'global_contact_information_availability_time_zone', 'option' )

					) : ?>

						<div class="p-tel c-faqs__tel">

							<!-- Icon -->

							<?php if ( get_field( 'global_contact_information_numbers_telephone', 'option' ) ) : ?>

								<span><?php the_field( 'global_contact_information_numbers_telephone', 'option' ); ?></span>

							<?php endif; ?>

							<span>

								<?php if ( get_field( 'global_contact_information_availability_days_of_the_week_from', 'option' ) ) : ?>

									<?php the_field( 'global_contact_information_availability_days_of_the_week_from', 'option' ); ?>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_availability_days_of_the_week_to', 'option' ) ) : ?>

									- <?php the_field( 'global_contact_information_availability_days_of_the_week_to', 'option' ); ?><?php endif; ?>,

							</span>

							<span>

								<?php if ( get_field( 'global_contact_information_availability_hours_from', 'option' ) ) : ?>

									<?php the_field( 'global_contact_information_availability_hours_from', 'option' ); ?>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_availability_hours_to', 'option' ) ) : ?>

									- <?php the_field( 'global_contact_information_availability_hours_to', 'option' ); ?><?php endif; ?><?php if ( get_field( 'global_contact_information_availability_time_zone', 'option' ) ) : ?>, <?php the_field( 'global_contact_information_availability_time_zone', 'option' ); ?>

								<?php endif; ?>

							</span>

						</div>

					<?php endif; ?>

				</div>

			<?php endif; ?>

		</div>

	</div>

<?php endif; ?>
