<div class="section s-check-your-rate">

	<div class="inner-wrap s-inner-wrap s-check-your-rate__inner-wrap">

		<div class="form c-check-your-rate hero-form">

			<form action="https://www.upgrade.com/funnel/" autocomplete="off" class="c-check-your-rate__form c-check-your-rate__form--horizontal loan-form">

				<fieldset class="c-check-your-rate__fieldset">

					<legend class="c-check-your-rate__legend large tagline">

						<?php if ( is_page( 'personal-loans' ) ) : ?>

							<?php /* Personal Loans */ ?>

							<?php the_field( 'personal_loans_check_your_rate_headline' ); ?>

							<?php if ( get_field( 'personal_loans_check_your_rate_subhead' ) ) : ?>

								<span><?php the_field( 'personal_loans_check_your_rate_subhead' ); ?></span>

							<?php endif; ?>

						<?php endif; ?>

						<?php if ( is_singular( 'loan' ) ) : ?>

							<?php /* Individual Loan Entries */ ?>

							<?php the_field( 'loan_check_your_rate_headline' ); ?>

							<?php if ( get_field( 'loan_check_your_rate_subhead' ) ) : ?>

								<span><?php the_field( 'loan_check_your_rate_subhead' ); ?></span>

							<?php endif; ?>

						<?php endif; ?>

						<?php if ( is_page( 'reviews' ) ) : ?>

							<?php /* Reviews */ ?>

							<?php the_field( 'reviews_check_your_rate_headline' ); ?>

							<?php if ( get_field( 'reviews_check_your_rate_subhead' ) ) : ?>

								<span><?php the_field( 'reviews_check_your_rate_subhead' ); ?></span>

							<?php endif; ?>

						<?php endif; ?>

					</legend>

					<div class="c-check-your-rate__fields controls">

						<ol class="c-check-your-rate__list">

							<li class="c-check-your-rate__item input money">

								<label for="loan-amount" class="c-check-your-rate__label">Loan Amount ($1,000 to $50,000)</label>

								<input type="tel" id="loan-amount" class="c-check-your-rate__input" />

								<span class="c-check-your-rate__error error money-error hidden-error">Please enter loan amount between specified values.</span>

							</li>

							<li class="c-check-your-rate__item input dropdown smooth-scroll" data-scroll-target=".tagline">

								<label for="loan-purpose-select" id="loan-purpose-label" class="c-check-your-rate__label">Loan Purpose</label>

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

								<span class="c-check-your-rate__error error purpose-error hidden-error">Select a purpose</span>

							</li>

						</ol>

						<a href="#" class="button submit c-check-your-rate__button">Check Your Rate</a>

					</div>

				</fieldset>

				<div class="c-check-your-rate__email">

					Receive Mail? <a href="https://www.upgrade.com/funnel/" class="c-check-your-rate__email-link">Click Here</a>

				</div>

			</form>

		</div>

	</div>

</div>
