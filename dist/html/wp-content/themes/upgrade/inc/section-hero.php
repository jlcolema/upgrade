<div class="section s-hero">

	<div class="inner-wrap s-inner-wrap s-hero__inner-wrap">

		<?php if ( is_page( 'home' ) ) : ?>

			<?php /* Home */ ?>

			<div class="c-home-hero hero-form">

				<h1 class="c-home-hero__header"><?php the_field( 'home_hero_headline' ); ?></h1>

				<form action="https://www.upgrade.com/funnel/" autocomplete="off" class="c-home-hero__form loan-form">

					<fieldset class="c-home-hero__fieldset">

						<legend class="c-home-hero__legend large tagline"><?php the_field( 'home_hero_subhead' ); ?></legend>

						<div class="c-home-hero__fields controls">

							<ol class="c-home-hero__form-list">

								<li class="c-home-hero__form-list-item input money">

									<label for="loan-amount" class="c-home-hero__label">Loan Amount ($1,000 to $50,000)</label>

									<input type="tel" id="loan-amount" class="c-home-hero__input" />

									<span class="c-home-hero__error error money-error hidden-error">Please enter loan amount between specified values.</span>

								</li>

								<li class="c-home-hero__form-list-item input dropdown smooth-scroll" data-scroll-target=".tagline">

									<label for="loan-purpose-select" id="loan-purpose-label" class="c-home-hero__label">Loan Purpose</label>

									<a class="current" id="loan-purpose" href="#" role="button" aria-label="Please select a purpose." aria-haspopup="true" aria-expanded="false">

										<span class="initial">&nbsp;</span>

									</a>

									<div class="arrow-marker" aria-hidden="true"></div>

									<ul class="dropdown-options" aria-labelledby="loan-purpose">

										<li>

											<a href="#" val="CREDIT_CARD">Pay off Credit Cards</a>

										</li>

										<li>

											<a href="#" val="DEBT_CONSOLIDATION">Debt Consolidation</a>

										</li>

										<li>

											<a href="#" val="SMALL_BUSINESS">Business</a>

										</li>

										<li>

											<a href="#" val="HOME_IMPROVEMENT">Home Improvement</a>

										</li>

										<li>

											<a href="#" val="LARGE_PURCHASE">Large Purchase</a>

										</li>

										<li>

											<a href="#" val="OTHER">Other</a>

										</li>

									</ul>

									<select id="loan-purpose-select" name="purpose" tabindex="-1">

										<option disabled selected value="">Loan Purpose</option>
										<option value="CREDIT_CARD">Pay off Credit Cards</option>
										<option value="DEBT_CONSOLIDATION">Debt Consolidation</option>
										<option value="SMALL_BUSINESS">Business</option>
										<option value="HOME_IMPROVEMENT">Home Improvement</option>
										<option value="LARGE_PURCHASE">Large Purchase</option>
										<option value="OTHER">Other</option>

									</select>

									<span class="c-home-hero__error error purpose-error hidden-error">Select a purpose</span>

								</li>

							</ol>

							<a href="#" class="button submit c-home-hero__button">Check Your Rate</a>

						</div>

					</fieldset>

					<div class="c-home-hero__email">

						Receive Mail? <a href="https://www.upgrade.com/funnel/" class="c-home-hero__email-link">Click Here</a>.

					</div>

				</form>

				<?php if ( have_rows( 'home_hero_list' ) ) : ?>

					<ul class="c-home-hero__benefits-list">

						<?php while( have_rows( 'home_hero_list' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-home-hero__benefits-list-item"><?php the_sub_field( 'item' ); ?></li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

			<?php if ( get_field( 'home_hero_background_image' ) ) : ?>

				<picture class="c-home-hero__picture">

					<source srcset="<?php the_field( 'home_hero_background_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/small-screen-image-placeholder.png" alt="A very nice description of the image" class="c-home-hero__background-image">

				</picture>

			<?php endif; ?>

		<?php endif; ?>

		<?php if ( is_page( 'personal-loans' ) ) : ?>

			<?php /* Personal Loans */ ?>

			<div class="c-personal-loans-hero hero-form">

				<h1 class="c-personal-loans-hero__header"><?php the_field( 'personal_loans_hero_headline' ); ?></h1>

				<h2 class="c-personal-loans-hero__secondary-header"><?php the_field( 'personal_loans_hero_subhead' ); ?></h2>

				<form action="https://www.upgrade.com/funnel/" autocomplete="off" class="c-personal-loans-hero__form loan-form">

					<fieldset class="c-personal-loans-hero__fieldset">

						<legend class="c-personal-loans-hero__legend large tagline">Get Started Here</legend>

						<div class="c-personal-loans-hero__fields controls">

							<ol class="c-personal-loans-hero__form-list">

								<li class="c-personal-loans-hero__form-list-item input money">

									<label for="loan-amount" class="c-personal-loans-hero__label">Loan Amount ($1,000 to $50,000)</label>

									<input type="tel" id="loan-amount" class="c-personal-loans-hero__input" />

									<span class="c-personal-loans-hero__error error money-error hidden-error">Please enter loan amount between specified values.</span>

								</li>

								<li class="c-personal-loans-hero__form-list-item input dropdown smooth-scroll" data-scroll-target=".tagline">

									<label for="loan-purpose-select" id="loan-purpose-label" class="c-personal-loans-hero__label">Loan Purpose</label>

									<a class="current" id="loan-purpose" href="#" role="button" aria-label="Please select a purpose." aria-haspopup="true" aria-expanded="false">

										<span class="initial">&nbsp;</span>

									</a>

									<div class="arrow-marker" aria-hidden="true"></div>

									<ul class="dropdown-options" aria-labelledby="loan-purpose">

										<li>

											<a href="#" val="CREDIT_CARD">Pay off Credit Cards</a>

										</li>

										<li>

											<a href="#" val="DEBT_CONSOLIDATION">Debt Consolidation</a>

										</li>

										<li>

											<a href="#" val="SMALL_BUSINESS">Business</a>

										</li>

										<li>

											<a href="#" val="HOME_IMPROVEMENT">Home Improvement</a>

										</li>

										<li>

											<a href="#" val="LARGE_PURCHASE">Large Purchase</a>

										</li>

										<li>

											<a href="#" val="OTHER">Other</a>

										</li>

									</ul>

									<select id="loan-purpose-select" name="purpose" tabindex="-1">

										<option disabled selected value="">Loan Purpose</option>
										<option value="CREDIT_CARD">Pay off Credit Cards</option>
										<option value="DEBT_CONSOLIDATION">Debt Consolidation</option>
										<option value="SMALL_BUSINESS">Business</option>
										<option value="HOME_IMPROVEMENT">Home Improvement</option>
										<option value="LARGE_PURCHASE">Large Purchase</option>
										<option value="OTHER">Other</option>

									</select>

									<span class="c-personal-loans-hero__error error purpose-error hidden-error">Select a purpose</span>

								</li>

							</ol>

							<a href="#" class="button submit c-personal-loans-hero__button">Check Your Rate</a>

						</div>

					</fieldset>

					<div class="c-personal-loans-hero__note">Checking your rate is free and won&rsquo;t impact your credit score.</div>

				</form>

				<?php if ( have_rows( 'personal_loans_hero_list' ) ) : ?>

					<ul class="c-personal-loans-hero__benefits-list">

						<?php while( have_rows( 'personal_loans_hero_list' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-personal-loans-hero__benefits-list-item"><?php the_sub_field( 'item' ); ?></li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

			<?php if ( get_field( 'personal_loans_hero_background_image' ) ) : ?>

				<picture class="c-personal-loans-hero__picture">

					<source srcset="<?php the_field( 'personal_loans_hero_background_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/small-screen-image-placeholder.png" alt="A very nice description of the image" class="c-personal-loans-hero__background-image">

				</picture>

			<?php endif; ?>

		<?php endif; ?>

		<?php if ( is_singular( 'loan' ) ) : ?>

			<?php /* Individual Loan Entry */ ?>

			<div class="c-loan-hero hero-form">

				<div class="c-loan-hero__section"><?php the_field( 'loan_hero_section' ); ?></div>

				<h1 class="c-loan-hero__header"><?php the_field( 'loan_hero_headline' ); ?></h1>

				<form action="https://www.upgrade.com/funnel/" autocomplete="off" class="c-loan-hero__form loan-form">

					<fieldset class="c-loan-hero__fieldset">

						<legend class="c-loan-hero__legend large tagline">Get Started Here</legend>

						<div class="c-loan-hero__fields controls">

							<ol class="c-loan-hero__form-list">

								<li class="c-loan-hero__form-list-item input money">

									<label for="loan-amount" class="c-loan-hero__label">Loan Amount ($1,000 to $50,000)</label>

									<input type="tel" id="loan-amount" class="c-loan-hero__input" />

									<span class="c-loan-hero__error error money-error hidden-error">Please enter loan amount between specified values.</span>

								</li>

								<li class="c-loan-hero__form-list-item input dropdown smooth-scroll" data-scroll-target=".tagline">

									<label for="loan-purpose-select" id="loan-purpose-label" class="c-loan-hero__label">Loan Purpose</label>

									<a class="current" id="loan-purpose" href="#" role="button" aria-label="Please select a purpose." aria-haspopup="true" aria-expanded="false">

										<span class="initial">&nbsp;</span>

									</a>

									<div class="arrow-marker" aria-hidden="true"></div>

									<ul class="dropdown-options" aria-labelledby="loan-purpose">

										<li>

											<a href="#" val="CREDIT_CARD">Pay off Credit Cards</a>

										</li>

										<li>

											<a href="#" val="DEBT_CONSOLIDATION">Debt Consolidation</a>

										</li>

										<li>

											<a href="#" val="SMALL_BUSINESS">Business</a>

										</li>

										<li>

											<a href="#" val="HOME_IMPROVEMENT">Home Improvement</a>

										</li>

										<li>

											<a href="#" val="LARGE_PURCHASE">Large Purchase</a>

										</li>

										<li>

											<a href="#" val="OTHER">Other</a>

										</li>

									</ul>

									<select id="loan-purpose-select" name="purpose" tabindex="-1">

										<option disabled selected value="">Loan Purpose</option>
										<option value="CREDIT_CARD">Pay off Credit Cards</option>
										<option value="DEBT_CONSOLIDATION">Debt Consolidation</option>
										<option value="SMALL_BUSINESS">Business</option>
										<option value="HOME_IMPROVEMENT">Home Improvement</option>
										<option value="LARGE_PURCHASE">Large Purchase</option>
										<option value="OTHER">Other</option>

									</select>

									<span class="c-loan-hero__error error purpose-error hidden-error">Select a purpose</span>

								</li>

							</ol>

						</div>

						<a href="#" class="button submit c-loan-hero__button">Check Your Rate</a>

					</fieldset>

					<div class="c-loan-hero__note">Checking your rate is free and won&rsquo;t impact your credit score.</div>

				</form>

				<?php if ( have_rows( 'loan_hero_list' ) ) : ?>

					<ul class="c-loan-hero__benefits-list">

						<?php while( have_rows( 'loan_hero_list' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-loan-hero__benefits-list-item"><?php the_sub_field( 'item' ); ?></li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

			<?php if ( get_field( 'loan_hero_background_image' ) ) : ?>

				<picture class="c-loan-hero__picture">

					<source srcset="<?php the_field( 'loan_hero_background_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/small-screen-image-placeholder.png" alt="A very nice description of the image" class="c-loan-hero__background-image">

				</picture>

			<?php endif; ?>

		<?php endif; ?>

		<?php if ( is_page( 'personal-credit-line' ) ) : ?>

			<?php /* Personal Credit Line */ ?>

			<div class="c-personal-credit-line-hero">

				<h1 class="c-personal-credit-line-hero__header"><?php the_field( 'personal_credit_line_hero_headline' ); ?></h1>

				<h2 class="c-personal-credit-line-hero__secondary-header"><?php the_field( 'personal_credit_line_hero_subhead' ); ?></h2>

				<div class="c-personal-credit-line-hero__more">

					<a data-sumome-listbuilder-id="42023746-d5cd-4aba-b191-39ac90b888a4" class="c-personal-credit-line-hero__more-link">Join Waitlist</a>

				</div>

				<?php if ( have_rows( 'personal_credit_line_hero_list' ) ) : ?>

					<ul class="c-personal-credit-line-hero__benefits-list">

						<?php while( have_rows( 'personal_credit_line_hero_list' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-personal-credit-line-hero__benefits-list-item"><?php the_sub_field( 'item' ); ?></li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

			<?php if ( get_field( 'personal_credit_line_hero_background_image' ) ) : ?>

				<picture class="c-personal-credit-line-hero__picture">

					<source srcset="<?php the_field( 'personal_credit_line_hero_background_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/small-screen-image-placeholder.png" alt="A very nice description of the image" class="c-personal-credit-line-hero__background-image">

				</picture>

			<?php endif; ?>

		<?php endif; ?>

		<?php if ( is_page( 'credit-health' ) ) : ?>

			<?php /* Credit Health */ ?>

			<div class="c-credit-health-hero">

				<h1 class="c-credit-health-hero__header"><?php the_field( 'credit_health_hero_headline' ); ?></h1>

				<h2 class="c-credit-health-hero__secondary-header"><?php the_field( 'credit_health_hero_subhead' ); ?></h2>

				<div class="c-credit-health-hero__more">

					<a href="<?php the_field( 'credit_health_hero_button_url' ); ?>" class="c-credit-health-hero__more-link"><?php the_field( 'credit_health_hero_button_label' ); ?></a>

				</div>

				<div class="c-credit-health-hero__note">Monitoring your credit score is free and won&rsquo;t impact your credit score.</div>

			</div>

			<?php if ( get_field( 'credit_health_hero_background_image' ) ) : ?>

				<picture class="c-credit-health-hero__picture">

					<source srcset="<?php the_field( 'credit_health_hero_background_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/small-screen-image-placeholder.png" alt="A very nice description of the image" class="c-credit-health-hero__background-image">

				</picture>

			<?php endif; ?>

		<?php endif; ?>

		<?php if ( is_page( 'about-us' ) ) : ?>

			<?php /* About Us */ ?>

			<div class="c-about-us-hero">

				<h1 class="c-about-us-hero__header">About Us</h1>

				<div class="c-about-us-hero__overlay">

					<h2 class="c-about-us-hero__secondary-header"><?php the_field( 'about_us_hero_subhead' ); ?></h2>

					<div class="c-about-us-hero__description">

						<?php the_field( 'about_us_hero_overview' ); ?>

					</div>

				</div>

			</div>

			<?php if ( get_field( 'about_us_hero_background_image' ) ) : ?>

				<picture class="c-about-us-hero__picture">

					<source srcset="<?php the_field( 'about_us_hero_background_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php the_field( 'about_us_hero_background_image' ); ?>" alt="A very nice description of the image" class="c-about-us-hero__background-image">

				</picture>

			<?php endif; ?>

		<?php endif; ?>

		<div class="c-hero__move">

			<a href="#next" class="c-hero__move-link">To next section</a>

		</div>

	</div>

</div>
