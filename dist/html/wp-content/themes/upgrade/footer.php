	</main>

	<footer id="" class="footer l-footer" role="contentinfo">

		<div class="wrap l-wrap l-footer__wrap">

			<nav id="" class="c-secondary-nav" role="navigation">

				<?php

					wp_nav_menu( array(

						// 'menu'				=> '',
						'menu_class'		=> '',
						// 'menu_id'			=> '',
						'container'			=> '',
						// 'container_class'	=> '',
						// 'container_id'		=> '',
						// 'fallback_cb'		=> '',
						// 'before'			=> '',
						// 'after'			=> '',
						// 'link_before'		=> '',
						// 'link_after'			=> '',
						// 'echo'				=> true,
						'depth'				=> 2,
						'walker'			=> new Secondary_Navigation_Walker_Nav_Menu,
						'theme_location'	=> 'secondary',
						'items_wrap'		=> '<ul class="c-secondary-nav__list">%3$s</ul>',
						// 'item_spacing'	=> 'preserve',

					));

				?>

			</nav>

			<div class="h-card c-contact-information">

				<div class="p-name u-logo u-url c-contact-information__logo">

					<a href="<?php echo esc_url( home_url( '/') ); ?>" class="c-contact-information__logo-link">

						<?php get_template_part( 'inc/snippet-logo-vertical-outline', '' ); ?>

					</a>

				</div>

				<?php if (

					get_field( 'global_contact_information_address_street_address', 'option' )

					|| get_field( 'global_contact_information_address_extended_address', 'option' )

					|| get_field( 'global_contact_information_address_locality', 'option' )

					|| get_field( 'global_contact_information_address_region', 'option' )

					|| get_field( 'global_contact_information_address_postal_code', 'option' )

					|| get_field( 'global_contact_information_address_country_name', 'option' )

				) : ?>

					<div class="p-adr c-contact-information__address">

						<?php if (

							get_field( 'global_contact_information_address_street_address', 'option' )

							|| get_field( 'global_contact_information_address_extended_address', 'option' )

						) : ?>

							<div class="c-contact-information__section">

								<?php if ( get_field( 'global_contact_information_address_street_address', 'option' ) ) : ?>

									<span class="p-street-address c-contact-information__street-address">

										<?php the_field( 'global_contact_information_address_street_address', 'option' ); ?>,

									</span>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_address_extended_address', 'option' ) ) : ?>

									<span class="p-extended-address c-contact-information__extended-address">

										<?php the_field( 'global_contact_information_address_extended_address', 'option' ); ?>

									</span>

								<?php endif; ?>

							</div>

						<?php endif; ?>

						<?php if (

							get_field( 'global_contact_information_address_locality', 'option' )

							|| get_field( 'global_contact_information_address_region', 'option' )

							|| get_field( 'global_contact_information_address_postal_code', 'option' )

							|| get_field( 'global_contact_information_address_country_name', 'option' )

						) : ?>

							<div class="c-contact-information__section">

								<?php if ( get_field( 'global_contact_information_address_locality', 'option' ) ) : ?>

									<span class="p-locality c-contact-information__locality"><?php the_field( 'global_contact_information_address_locality', 'option' ); ?>,</span>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_address_region', 'option' ) ) : ?>

									<?php

										// Variables

										$region = get_field( 'global_contact_information_address_region', 'option' );

										// Displays abbreviated version of the region selected. Example: CA (for California).

										$region_value = $region['value'];

										// Displays the full version of the region selected. Example: California (for California).

										$region_label = $region['label'];

									?>

									<span class="p-region c-contact-information__region">

										<abbr title="<?php echo $region_label; ?>"><?php echo $region_value; ?></abbr>

									</span>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_address_postal_code', 'option' ) ) : ?>

									<span class="p-postal-code c-contact-information__postal-code"><?php the_field( 'global_contact_information_address_postal_code', 'option' ); ?>,</span>

								<?php endif; ?>

								<?php if ( get_field( 'global_contact_information_address_country_name', 'option' ) ) : ?>

									<?php

										// Variables

										$country_name = get_field( 'global_contact_information_address_country_name', 'option' );

										// Displays abbreviated version of the country selected. Example: USA (for United States of America).

										$country_name_value = $country_name['value'];

										// Displays the full version of the country selected. Example: United States of Amercia (for United States of Amercia).

										$country_name_label = $country_name['label'];

									?>

									<span class="p-country-name c-contact-information__country-name">

										<abbr title="<?php echo $country_name_label; ?>"><?php echo $country_name_value; ?></abbr>

									</span>

								<?php endif; ?>

							</div>

						<?php endif; ?>

					</div>

				<?php endif; ?>

				<?php if ( get_field( 'global_contact_information_email_addresses_investor', 'option' ) ) : ?>

					<div class="p-email c-contact-information__email">

						Looking to Invest? Contact us at <span><a href="mailto:<?php the_field( 'global_contact_information_email_addresses_investor', 'option' ); ?>" class="c-contact-information__email-link"><?php the_field( 'global_contact_information_email_addresses_investor', 'option' ); ?></a></span>

					</div>

				<?php endif; ?>

				<?php if ( get_field( 'global_contact_information_email_addresses_other_inquiries', 'option' ) ) : ?>

					<div class="p-email c-contact-information__email">

						For other inquiries, contact us at <span><a href="mailto:<?php the_field( 'global_contact_information_email_addresses_other_inquiries', 'option' ); ?>" class="c-contact-information__email-link"><?php the_field( 'global_contact_information_email_addresses_other_inquiries', 'option' ); ?></a></span>

					</div>

				<?php endif; ?>

				<?php if (

					get_field( 'global_social_media_urls_facebook', 'option' )

					|| get_field( 'global_social_media_urls_twitter', 'option' )

					|| get_field( 'global_social_media_urls_linkedin', 'option' )

				) : ?>

					<div class="connect c-contact-information__connect">

						<ul class="c-contact-information__connect-list">

							<?php if ( get_field( 'global_social_media_urls_facebook', 'option' ) ) : ?>

								<li class="u-url c-contact-information__connect-item c-contact-information__connect-item--facebook">

									<a href="<?php the_field( 'global_social_media_urls_facebook', 'option' ); ?>" rel="external" target="_blank" class="c-contact-information__connect-link c-contact-information__connect-link--facebook">Facebook</a>

								</li>

							<?php endif; ?>

							<?php if ( get_field( 'global_social_media_urls_twitter', 'option' ) ) : ?>

								<li class="u-url c-contact-information__connect-item c-contact-information__connect-item--twitter">

									<a href="<?php the_field( 'global_social_media_urls_twitter', 'option' ); ?>" rel="external" target="_blank" class="c-contact-information__connect-link c-contact-information__connect-link--twitter">Twitter</a>

								</li>

							<?php endif; ?>

							<?php if ( get_field( 'global_social_media_urls_linkedin', 'option' ) ) : ?>

								<li class="u-url c-contact-information__connect-item c-contact-information__connect-item--linkedin">

									<a href="<?php the_field( 'global_social_media_urls_linkedin', 'option' ); ?>" rel="external" target="_blank" class="c-contact-information__connect-link c-contact-information__connect-link--linkedin">LinkedIn</a>

								</li>

							<?php endif; ?>

						</ul>

					</div>

				<?php endif; ?>

			</div>

			<?php get_template_part( 'inc/section-footnotes', '' ); ?>

			<p class="c-copyright">Copyright <?php echo date( 'Y' ); ?> Upgrade, Inc. <span>All rights reserved.</span> <span class="c-copyright__note">All loans made by WebBank, member <abbr title="Federal Deposit Insurance Corporation">FDIC</abbr>.</span></p>

			<?php if ( have_rows( 'global_badges_list', 'option' ) ) : ?>

				<div class="c-badges">

					<?php while ( have_rows( 'global_badges_list', 'option' ) ) : the_row(); ?>

						<div class="c-badges__item">

							<?php if ( get_sub_field( 'badges_url' ) ) : ?>

								<a href="<?php the_sub_field( 'badges_url' ); ?>" rel="external" class="c-badges__link">

							<?php endif; ?>

								<img src="<?php the_sub_field( 'badges_image' ); ?>" alt="<?php the_sub_field( 'badges_title' ); ?>" class="c-badges__image" />

							<?php if ( get_sub_field( 'badges_url' ) ) : ?>

								</a>

							<?php endif; ?>

						</div>

					<?php endwhile; ?>

				</div>

			<?php endif; ?>

			<div class="c-move">

				<a href="#top" class="c-move__link">Go back to top of the page?</a>

			</div>

		</div>

	</footer>

	<?php /* Modal: Check Your Rate */ ?>

	<?php get_template_part( 'inc/modal-check-your-rate', '' ); ?>

	<?php /*

		<!-- Use this or figure out how to use 'enhanced' -->

		<script type="text/javascript" src="/assets/js/modernizr-{{MODERNIZR_VERSION}}.min.js"></script>

	*/ ?>

	<!-- <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->

	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-3.3.1.min.js"></script>

	<!-- Scripts from live site -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/vendor.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/bundle-new.js"></script>

	<!-- <script> -->

		<!-- window.jQuery || document.write( '<script type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"><\/script>' ) -->

	<!-- </script> -->

	<?php

		$loan_reviews_tag = get_queried_object();

	?>

	<?php if (

		get_field( 'loan_reviews_tag', $loan_reviews_tag->ID )

		|| is_page( 'personal-loans' )

		|| is_page( 'reviews' )

	) : ?>

		<!-- Trustpilot -->

		<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

	<?php endif; ?>

	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/global.js"></script>

	<?php wp_footer(); ?>

</body>

</html>
