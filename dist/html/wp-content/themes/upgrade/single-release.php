<?php get_header(); ?>

	<div class="section s-single-release">

		<div class="inner-wrap s-inner-wrap s-single-release__inner-wrap">

			<div class="c-single-release">

				<h1 class="c-single-release__headline">Press Room</h1>

				<div class="c-single-release__page">

					<article class="c-single-release__article">

						<h1 class="c-single-release__article-header"><?php the_title(); ?></h1>

						<h2 class="c-single-release__article-subhead"><?php the_field( 'release_subhead' ); ?></h2>

						<div class="c-single-release__article-meta">

							<span class="c-single-release__article-location">San Francisco</span> - <time datetime="<?php echo get_the_date('c', $release->ID ); ?>" class="c-single-release__article-date"><?php echo get_the_date('F j, Y', $release->ID ); ?></time>

						</div>

						<div class="c-single-release__article-content">

							<?php the_field( 'release_content' ); ?>

						</div>

						<!-- About Upgrade -->

						<div class="c-single-release__about-upgrade">

							<h3 class="c-single-release__about-upgrade-title">About Upgrade</h3>

							<div class="c-single-release__about-upgrade-detail">

								<?php the_field( 'about_upgrade_content', 'option' ); ?>

							</div>

						</div>

						<?php if ( have_rows( 'release_about' ) ) : ?>

							<div class="c-single-release__about-other">

								<?php while ( have_rows( 'release_about' ) ) : the_row(); ?>

									<?php

										// Variables

										// $image = get_sub_field('image');
										// $content = get_sub_field('content');
										// $link = get_sub_field('link');

									?>

									<div class="c-single-release__about-item">

										<h3 class="c-single-release__about-other-title"><?php the_sub_field( 'title' ); ?></h3>

										<div class="c-single-release__about-other-detail">

											<?php the_sub_field( 'content' ); ?>

										</div>

									</div>

								<?php endwhile; ?>

							</div>

						<?php endif; ?>

						<div class="c-single-release__back">

							<a href="/press-room/" class="c-single-release__back-link">

								<span>Back to List</span>

							</a>

						</div>

						<?php if ( get_field( 'global_contact_information_email_addresses_media_inquiries', 'option' ) ) : ?>

							<!-- Media Inquiries -->

							<div class="c-single-release__media-inquiries">

								<h3 class="c-single-release__media-inquiries-title">Media Inquiries</h3>

								<div class="c-single-release__media-inquiries-email">

									<a href="mailto:<?php the_field( 'global_contact_information_email_addresses_media_inquiries', 'option' ); ?>" class="c-single-release__media-inquiries-link"><?php the_field( 'global_contact_information_email_addresses_media_inquiries', 'option' ); ?></a><?php if ( have_rows( 'release_about' ) ) : ?><?php while ( have_rows( 'release_about' ) ) : the_row(); ?>, <a href="mailto:<?php the_sub_field( 'email_address' ); ?>" class="c-single-release__media-inquiries-link"><?php the_sub_field( 'email_address' ); ?></a>

										<?php endwhile; ?>

									<?php endif; ?>

								</div>

							</div>

						<?php endif; ?>

					</article>

				</div>

			</div>

		</div>

	</div>

<?php get_footer();
