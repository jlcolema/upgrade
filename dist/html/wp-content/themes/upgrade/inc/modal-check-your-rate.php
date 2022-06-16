<?php if ( is_page( 'personal-loans' ) || is_singular( 'loan' ) ) : ?>

	<div id="check-your-rate-modal" class="section m-check-your-rate-modal">

		<div class="inner-wrap m-inner-wrap m-check-your-rate-modal__inner-wrap">

			<div class="form c-check-your-rate-modal check-your-rate-hero-form">

				<h1 class="c-check-your-rate-modal__header">Check Your Rate</h1>

				<form action="https://www.upgrade.com/funnel/" autocomplete="off" class="c-check-your-rate-modal__form c-check-your-rate-modal__form--horizontal loan-form">

					<fieldset class="c-check-your-rate-modal__fieldset">

						<legend class="c-check-your-rate-modal__legend large tagline">

							<span class="c-check-your-rate-modal__legend-wrap">Checking your rate is <span class="c-check-your-rate-modal__blue">free</span> and won&rsquo;t impact your credit score.

						</legend>

						<div class="c-check-your-rate-modal__fields controls">

							<ol class="c-check-your-rate-modal__list">

								<li class="c-check-your-rate-modal__item input money">

									<label for="loan-amount" class="c-check-your-rate-modal__label">Loan Amount ($1,000 to $50,000)</label>

									<input type="tel" id="loan-amount" class="c-check-your-rate-modal__input" />

									<span class="c-check-your-rate-modal__error error money-error hidden-error">Please enter loan amount between specified values.</span>

								</li>

								<li class="c-check-your-rate-modal__item input dropdown smooth-scroll" data-scroll-target=".tagline">

									<label for="loan-purpose-select" id="loan-purpose-label" class="c-check-your-rate-modal__label">Loan Purpose</label>

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

									<span class="c-check-your-rate-modal__error error purpose-error hidden-error">Select a purpose</span>

								</li>

							</ol>

							<a href="#" class="button submit c-check-your-rate-modal__button">Check Your Rate</a>

						</div>

					</fieldset>

					<div class="c-check-your-rate-modal__email">

						Receive Mail? <a href="https://www.upgrade.com/funnel/" class="c-check-your-rate-modal__email-link">Click Here</a>

					</div>

				</form>

				<div class="c-check-your-rate-modal__close">Close</div>

			</div>

		</div>

	</div>

<?php endif; ?>
