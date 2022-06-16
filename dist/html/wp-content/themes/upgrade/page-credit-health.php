<?php get_header(); ?>

	<?php /* Hero */ ?>

	<?php get_template_part( 'inc/section-hero', '' ); ?>

	<!-- Your Credit Health -->

	<div class="section s-your-credit-health">

		<div class="inner-wrap s-inner-wrap s-your-credit-health__inner-wrap">

			<div class="c-your-credit-health">

				<h2 class="c-your-credit-health__header"><?php the_field( 'credit_health_need_to_name_one_headline' ); ?></h2>

				<?php if ( have_rows( 'credit_health_need_to_name_one_list' ) ) : ?>

					<ul class="c-your-credit-health__list">

						<?php while ( have_rows( 'credit_health_need_to_name_one_list' ) ) : the_row(); ?>

							<?php

								// Variables

							?>

							<li class="c-your-credit-health__item">

								<div class="c-your-credit-health__icon-title-wrap">

									<div class="c-your-credit-health__icon">

										<img src="<?php the_sub_field( 'icon' ); ?>" alt="<?php the_sub_field( 'title' ); ?>" class="c-your-credit-health__image" />

									</div>

									<h3 class="c-your-credit-health__title"><?php the_sub_field( 'title' ); ?></h3>

								</div>

								<?php if ( have_rows( 'sublist' ) ) : ?>

									<ul class="c-your-credit-health__sublist">

										<?php while ( have_rows( 'sublist' ) ) : the_row(); ?>

											<?php

												// Variables

											?>

											<li class="c-your-credit-health__subitem">

												<h4 class="c-your-credit-health__subtitle"><?php the_sub_field( 'title' ); ?></h4>

												<div class="c-your-credit-health__description">

													<?php the_sub_field( 'description' ); ?>

												</div>

											</li>

										<?php endwhile; ?>

									</ul>

								<?php endif; ?>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>

		</div>

	</div>

	<!-- Credit Health Insights -->

	<div class="section s-credit-health-insights">

		<div class="inner-wrap s-inner-wrap s-credit-health-insights__inner-wrap">

			<div class="c-credit-health-insights">

				<h2 class="c-credit-health-insights__headline"><?php the_field( 'credit_health_credit_health_insights_headline' ); ?></h2>

				<div class="c-credit-health-insights__description">

					<?php the_field( 'credit_health_credit_health_insights_detail' ); ?>

				</div>

				<?php

					$posts = get_field( 'credit_health_credit_health_insights_featured_articles' );

				?>

				<?php if ( $posts ) : ?>

					<div class="c-credit-health-insights__list">

						<?php foreach( $posts as $post ) : ?>

							<?php setup_postdata( $post ); ?>

							<article class="c-credit-health-insights__item summary">

								<a href="<?php the_field( 'insight_url' ); ?>" rel="external" class="c-credit-health-insights__item-link">

									<div class="c-credit-health-insights__thumbnail">

										<img src="<?php the_field( 'insight_thumbnail' ); ?>" alt="<?php the_title(); ?>" class="c-credit-health-insights__image" />

									</div>

									<h1 class="c-credit-health-insights__title"><?php the_title(); ?></h1>

								</a>

							</article>

						<?php endforeach; ?>

					</div>

					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				<?php endif; ?>

				<div class="c-credit-health-insights__more">

					<a href="https://www.upgrade.com/credit-health/insights/" rel="external" class="c-credit-health-insights__more-link">See More</a>

				</div>

			</div>

		</div>

	</div>

<?php get_footer();
