<?php get_header(); ?>

	<?php /* Hero */ ?>

	<?php get_template_part( 'inc/section-hero', '' ); ?>

	<?php /* Why */ ?>

	<?php get_template_part( 'inc/section-why', '' ); ?>

	<?php /* How It Works */ ?>

	<?php get_template_part( 'inc/section-how-it-works', '' ); ?>

	<?php /* Flexibility and Customization */ ?>

	<?php get_template_part( 'inc/section-flexibility-and-customization', '' ); ?>

	<?php /* Feature Availability */ ?>

	<div class="section s-feature-availability">

		<div class="inner-wrap s-inner-wrap s-feature-availability__inner-wrap">

			<div class="c-feature-availability">

				<h2 class="c-feature-availability__header">Here&rsquo;s How Our <span>Personal Credit Line Stacks Up</span></h2>

				<?php if ( have_rows( 'personal_credit_line_table_feature_availability' ) ) : ?>

					<table class="c-feature-availability__table">

						<thead class="c-feature-availability__thead">

							<tr class="c-feature-availability__thead-row">

								<th scope="col" class="c-feature-availability__thead-th"></th>

								<th scope="col" class="c-feature-availability__thead-th c-feature-availability__thead-th--has-background" class="">Upgrade Personal Credit Line</th>

								<th scope="col" class="c-feature-availability__thead-th">Upgrade Personal Loan</th>

								<th scope="col" class="c-feature-availability__thead-th">Typical Credit Cards</th>

							</tr>

						</thead>

						<tbody class="c-feature-availability__tbody">

							<?php while( have_rows( 'personal_credit_line_table_feature_availability' ) ) : the_row(); ?>

								<?php

									// Variables

								?>

								<tr class="c-feature-availability__tbody-row">

									<th scope="row" class="c-feature-availability__tbody-feature"><?php the_sub_field( 'feature' ); ?></th>

									<td class="c-feature-availability__tbody-availability c-feature-availability__tbody-availability--has-background">

										<?php if ( get_sub_field( 'product_one' ) ) : ?>

											<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

												<title>Yes</title>

												<desc></desc>

												<defs></defs>

												<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

													<g id="Artboard-9" transform="translate(-654.000000, -1112.000000)" fill="#ffffff">

														<g id="Group-13" transform="translate(654.000000, 878.000000)">

															<path d="M6.76573036,249.292835 C6.71400573,249.445561 6.62810298,249.584417 6.51459015,249.698786 C6.29921784,249.91661 5.99721424,250.025436 5.69267674,249.994959 C5.20366112,250.029145 4.75695824,249.71734 4.61962312,249.24595 L0.258915856,244.879975 C-0.101795663,244.472756 -0.0835125041,243.854569 0.300632639,243.469455 C0.684777782,243.084342 1.30188073,243.06554 1.70867979,243.426556 L5.4187056,247.144153 L13.8547335,234.595119 C14.0024266,234.324412 14.2530423,234.124966 14.5496797,234.042065 C14.8463171,233.959164 15.1638079,233.999842 15.4300676,234.154862 C15.9810728,234.49543 16.1629379,235.212512 15.8410243,235.775236 L6.76573036,249.292835 Z" id="checkmark-path-copy"></path>

														</g>

													</g>

												</g>

											</svg>

										<?php endif; ?>

									</td>

									<td class="c-feature-availability__tbody-availability">

										<?php if ( get_sub_field( 'product_two' ) ) : ?>

											<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

												<title>Yes</title>

												<desc></desc>

												<defs></defs>

												<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

													<g id="Artboard-9" transform="translate(-654.000000, -1112.000000)" fill="#3F465E">

														<g id="Group-13" transform="translate(654.000000, 878.000000)">

															<path d="M6.76573036,249.292835 C6.71400573,249.445561 6.62810298,249.584417 6.51459015,249.698786 C6.29921784,249.91661 5.99721424,250.025436 5.69267674,249.994959 C5.20366112,250.029145 4.75695824,249.71734 4.61962312,249.24595 L0.258915856,244.879975 C-0.101795663,244.472756 -0.0835125041,243.854569 0.300632639,243.469455 C0.684777782,243.084342 1.30188073,243.06554 1.70867979,243.426556 L5.4187056,247.144153 L13.8547335,234.595119 C14.0024266,234.324412 14.2530423,234.124966 14.5496797,234.042065 C14.8463171,233.959164 15.1638079,233.999842 15.4300676,234.154862 C15.9810728,234.49543 16.1629379,235.212512 15.8410243,235.775236 L6.76573036,249.292835 Z" id="checkmark-path-copy"></path>

														</g>

													</g>

												</g>

											</svg>

										<?php endif; ?>

									</td>

									<td class="c-feature-availability__tbody-availability">

										<?php if ( get_sub_field( 'product_three' ) ) : ?>

											<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

												<title>Yes</title>

												<desc></desc>

												<defs></defs>

												<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

													<g id="Artboard-9" transform="translate(-654.000000, -1112.000000)" fill="#3F465E">

														<g id="Group-13" transform="translate(654.000000, 878.000000)">

															<path d="M6.76573036,249.292835 C6.71400573,249.445561 6.62810298,249.584417 6.51459015,249.698786 C6.29921784,249.91661 5.99721424,250.025436 5.69267674,249.994959 C5.20366112,250.029145 4.75695824,249.71734 4.61962312,249.24595 L0.258915856,244.879975 C-0.101795663,244.472756 -0.0835125041,243.854569 0.300632639,243.469455 C0.684777782,243.084342 1.30188073,243.06554 1.70867979,243.426556 L5.4187056,247.144153 L13.8547335,234.595119 C14.0024266,234.324412 14.2530423,234.124966 14.5496797,234.042065 C14.8463171,233.959164 15.1638079,233.999842 15.4300676,234.154862 C15.9810728,234.49543 16.1629379,235.212512 15.8410243,235.775236 L6.76573036,249.292835 Z" id="checkmark-path-copy"></path>

														</g>

													</g>

												</g>

											</svg>

										<?php endif; ?>

									</td>

								</tr>

							<?php endwhile; ?>

						</tbody>

					</table>

				<?php endif; ?>

			</div>

		</div>

	</div>

	<?php /* FAQs */ ?>

	<?php get_template_part( 'inc/section-faqs', '' ); ?>

<?php get_footer();
