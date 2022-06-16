<?php if ( is_page( 'personal-loans' ) ) : ?>

	<?php if ( get_field( 'personal_loans_reviews_tag' ) ) : ?>

		<div class="section s-reviews">

			<div class="inner-wrap s-inner-wrap s-reviews__inner-wrap">

				<div class="c-reviews">

					<div class="c-reviews__carousel">

						<div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="5a42bb96b894c904ac6f3662" data-style-height="130px" data-style-width="100%" data-theme="light" data-tags="<?php the_field( 'personal_loans_reviews_tag' ); ?>" data-stars="1,2,3,4,5" data-schema-type="Organization">

							<a href="https://www.trustpilot.com/review/upgrade.com" target="_blank">Trustpilot</a>

						</div>

					</div>

					<div class="c-reviews__more">

						<a href="/reviews" class="c-reviews__more-link">See More Reviews</a>

					</div>

				</div>

			</div>

		</div>

	<?php endif; ?>

<?php endif; ?>

<?php if ( is_singular( 'loan' ) ) : ?>

	<?php if ( get_field( 'loan_reviews_tag' ) ) : ?>

		<div class="section s-reviews">

			<div class="inner-wrap s-inner-wrap s-reviews__inner-wrap">

				<div class="c-reviews">

					<div class="c-reviews__carousel">

						<div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="5a42bb96b894c904ac6f3662" data-style-height="130px" data-style-width="100%" data-theme="light" data-tags="<?php the_field( 'loan_reviews_tag' ); ?>" data-stars="1,2,3,4,5" data-schema-type="Organization">

							<a href="https://www.trustpilot.com/review/upgrade.com" target="_blank">Trustpilot</a>

						</div>

					</div>

					<div class="c-reviews__more">

						<a href="/reviews" class="c-reviews__more-link">See More Reviews</a>

					</div>

				</div>

			</div>

		</div>

	<?php endif; ?>

<?php endif; ?>
