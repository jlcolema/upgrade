<?php get_header(); ?>

	<?php /* Hero */ ?>

	<?php get_template_part( 'inc/section-hero', '' ); ?>

	<!-- Who We Are -->

	<div id="next" class="section s-who-we-are">

		<div class="inner-wrap s-inner-wrap s-who-we-are__inner-wrap">

			<div class="c-who-we-are">

				<h2 class="c-who-we-are__header"><?php the_field( 'about_us_who_we_are_headline' ); ?></h2>

				<div class="c-who-we-are__overview">

					<div class="c-who-we-are__logo">

						<?php get_template_part( 'inc/snippet-logo-vertical-stripes', '' ); ?>

					</div>

					<div class="c-who-we-are__mission-statement">

						<?php the_field( 'about_us_who_we_are_mission_statement' ); ?>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- Team -->

	<div id="meet-our-team" class="section s-team who-we-are">

		<div class="inner-wrap s-inner-wrap s-team__inner-wrap">

			<div class="c-team">

				<!-- Executive -->

				<div id="team" class="c-team__executive team">

					<div class="c-team__overview">

						<h2 class="c-team__header"><?php the_field( 'about_us_meet_our_team_title' ); ?></h2>

						<div class="c-team__description">

							<?php the_field( 'about_us_meet_our_team_overview' ); ?>

						</div>

					</div>

					<?php

						$executive_members = get_field( 'about_us_meet_our_team_executive' );

					?>

					<?php if ( $executive_members ) : ?>

						<ul class="c-team__list c-team__list--members member-list">

							<?php foreach ( $executive_members as $post ) : ?>

								<?php setup_postdata( $post ); ?>

								<li class="c-team__item">

									<div class="c-team__item-wrap">

										<img src="<?php the_field( 'member_thumbnail' ); ?>" alt="<?php the_title(); ?>" class="c-team__photo" />

										<h3 class="c-team__name"><?php the_title(); ?></h3>

										<div class="c-team__credentials">

											<?php if ( get_field( 'member_co_founder' ) ) : ?>

												<div class="">Co-founder</div>

											<?php endif; ?>

											<div class=""><?php the_field( 'member_position' ); ?></div>

										</div>

									</div>

									<div class="profile collapsed" style="display: none !important;">

										<div class="card">

											<div class="c-team__member-photo card-img photo">

												<img src="<?php the_field( 'member_photo' ); ?>" alt="<?php the_title(); ?>" class="c-team__photo" />

											</div>

											<div class="c-team__member-body card-body">

												<div class="c-team__member-title card-title">

													<h3 class="c-team__name"><?php the_title(); ?></h3>

													<div class="c-team__credentials">

														<?php if ( get_field( 'member_co_founder' ) ) : ?>

															<div class="">Co-founder</div>

														<?php endif; ?>

														<div class=""><?php the_field( 'member_position' ); ?></div>

													</div>

												</div>

												<div class="c-team__bio card-text">

													<?php the_field( 'member_bio' ); ?>

												</div>

											</div>

										</div>

									</div>

								</li>

							<?php endforeach; ?>

						</ul>

						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

					<?php endif; ?>

					<div class="c-team__list-description description">

						<div class="c-team__member-detail card">

							<div class="c-team__member-photo card-img photo"></div>

							<div class="c-team__member-detail card-body">

								<div class="c-team__member-title card-title"></div>

								<div class="c-team__member-bio card-text"></div>

								<div class="c-team__member-back-to go-back">

									<span class="c-team__member-back-to-link">

										<span>Back to List</span>

									</span>

								</div>

							</div>

						</div>

					</div>

				</div>

				<!-- Board of Directors -->

				<div class="c-team__board board-members">

					<div class="c-team__overview">

						<h2 class="c-team__header">Board of Directors</h2>

					</div>

					<?php

						$board_of_directors_members = get_field( 'about_us_meet_our_team_board_of_directors' );

					?>

					<?php if ( $board_of_directors_members ) : ?>

						<ul class="c-team__list c-team__list--board-of-directors member-list">

							<?php foreach ( $board_of_directors_members as $post ) : ?>

								<?php setup_postdata( $post ); ?>

								<li class="c-team__item">

									<div class="c-team__item-wrap">

										<h3 class="c-team__name"><?php the_title(); ?></h3>

										<div class="c-team__credentials">

											<?php if ( get_field( 'member_co_founder' ) ) : ?>

												<div class="">Co-founder</div>

											<?php endif; ?>

											<div class=""><?php the_field( 'member_position' ); ?></div>

										</div>

									</div>

									<div class="profile collapsed" style="display: none !important;">

										<div class="card">

											<div class="c-team__member-body card-body">

												<div class="c-team__member-title card-title">

													<h3 class="c-team__name"><?php the_title(); ?></h3>

													<div class="c-team__credentials">

														<?php if ( get_field( 'member_co_founder' ) ) : ?>

															<div class="">Co-founder</div>

														<?php endif; ?>

														<div class=""><?php the_field( 'member_position' ); ?></div>

													</div>

												</div>

												<div class="c-team__bio card-text">

													<?php the_field( 'member_bio' ); ?>

												</div>

											</div>

										</div>

									</div>

								</li>

							<?php endforeach; ?>

						</ul>

						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

					<?php endif; ?>

					<div class="c-team__list-description description">

						<div class="c-team__member-detail card">

							<div class="c-team__member-photo card-img"></div>

							<div class="c-team__member-detail card-body">

								<div class="c-team__member-title card-title"></div>

								<div class="c-team__member-bio card-text"></div>

								<div class="c-team__member-back-to go-back">

									<span class="c-team__member-back-to-link">

										<span>Back to List</span>

									</span>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- How We Help -->

	<div class="section s-how-we-help">

		<div class="inner-wrap s-inner-wrap s-how-we-help__inner-wrap">

			<div class="c-how-we-help">

				<h2 class="c-how-we-help__header"><?php the_field( 'about_us_how_we_help_headline' ); ?></h2>

				<picture class="c-how-we-help__picture">

					<source srcset="<?php the_field( 'about_us_how_we_help_image' ); ?>" media="(min-width: 1000px)">

					<img srcset="<?php the_field( 'about_us_how_we_help_image_mobile' ); ?>" alt="A very nice description of the image" class="c-how-we-help__image">

				</picture>

				<div class="c-how-we-help__detail">

					<?php the_field( 'about_us_how_we_help_detail' ); ?>

				</div>

			</div>

		</div>

	</div>

	<!-- Our Offices -->

	<div class="section s-our-offices">

		<div class="inner-wrap s-inner-wrap s-our-offices__inner-wrap">

			<div class="c-our-offices">

				<h2 class="c-our-offices__header">Our Offices</h2>

				<?php if ( have_rows( 'our_offices_list', 'option' ) ) : ?>

					<ul class="c-our-offices__list">

						<?php while ( have_rows( 'our_offices_list', 'option' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-our-offices__item">

								<a href="<?php the_sub_field( 'our_offices_job_openings_url' ); ?>" rel="external" class="c-our-offices__link">

									<img src="<?php the_sub_field( 'our_offices_image' ); ?>" alt="" class="c-our-offices__img" />

									<h3 class="c-our-offices__name"><?php the_sub_field( 'our_offices_city' ); ?></h3>

									<p class="c-our-offices__responsibility"><?php the_sub_field( 'our_offices_description' ); ?></p>

								</a>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php get_footer();
