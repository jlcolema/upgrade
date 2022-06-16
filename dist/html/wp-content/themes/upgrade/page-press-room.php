<?php get_header(); ?>

	<div class="section s-press-room">

		<div class="inner-wrap s-inner-wrap s-press-room__inner-wrap">

			<div class="c-press-room">

				<h1 class="c-press-room__headline"><?php the_title(); ?></h1>

				<div class="c-press-room__page">

					<div class="c-press-room__articles">

						<?php

							$release_settings = array(

								'numberposts'	=> -1,
								'post_type'		=> 'release',
								'orderby'		=> 'date', // 'menu_order'
								'post_status'	=> 'publish',
								'order'			=> 'DESC' // 'ASC'

							);

							$releases = get_posts( $release_settings );

						?>

						<?php foreach ( $releases as $release ) : ?>

							<?php

								/* Subhead
								--------------------------------------*/

								$release_subhead = get_field( 'release_subhead', $release->ID );

								/* Excerpt
								--------------------------------------*/

								$release_excerpt = get_field( 'release_excerpt', $release->ID );

							?>

							<article class="c-press-room__article">

								<h1 class="c-press-room__article-title">

									<a href="<?php echo get_permalink( $release->ID ); ?>" class="c-press-room__article-title-link">

										<?php echo $release->post_title; ?>

									</a>

								</h1>

								<h2 class="c-press-room__article-subhead"><?php echo $release_subhead; ?></h2>

								<div class="c-press-room__article-detail">

									<div class="c-press-room__article-meta">

										<span class="c-press-room__article-location">San Francisco</span> - <time datetime="<?php echo get_the_date('c', $release->ID ); ?>" class="c-press-room__article-date"><?php echo get_the_date('F j, Y', $release->ID ); ?></time>

									</div>

									<div class="c-press-room__article-excerpt">

										<?php echo $release_excerpt; ?>

									</div>

									<div class="c-press-room__article-more">

										<a href="<?php echo get_permalink( $release->ID ); ?>" class="c-press-room__article-more-link">Read More</a>

									</div>

								</div>

							</article>

						<?php endforeach; ?>

					</div>

					<?php if ( get_field( 'global_contact_information_email_addresses_media_inquiries', 'option' ) ) : ?>

						<!-- Media Inquiries -->

						<div class="c-press-room__media-inquiries">

							<h3 class="c-press-room__media-inquiries-title">Media Inquiries</h3>

							<div class="c-press-room__media-inquiries-email">

								<a href="mailto:<?php the_field( 'global_contact_information_email_addresses_media_inquiries', 'option' ); ?>" class="c-press-room__media-inquiries-link"><?php the_field( 'global_contact_information_email_addresses_media_inquiries', 'option' ); ?></a>

							</div>

						</div>

					<?php endif; ?>

					<!-- Brand Assets -->

					<div class="c-press-room__brand-assets">

						<h3 class="c-press-room__brand-assets-title">Brand Asssets</h3>

						<?php if ( have_rows( 'brand_assets', 'option' ) ) : ?>

							<ul class="c-press-room__brand-assets-list">

								<?php

									// Variables

									$brand_assets_filename = the_sub_field( 'brand_assets_file' );

								?>

								<?php while ( have_rows( 'brand_assets', 'option' ) ) : the_row(); ?>

									<li class="c-press-room__brand-assets-item">

										<a href="<?php the_sub_field( 'brand_assets_file' ); ?>" download="<?php echo $brand_assets_filename['filename']; ?>" class="c-press-room__brand-assets-link">

											<div class="c-press-room__brand-assets-thumbnail">

												<img src="<?php the_sub_field( 'brand_assets_thumbnail' ); ?>" alt="<?php the_sub_field( 'brand_assets_title' ); ?>" class="c-press-room__brand-assets-image" />

											</div>

										</a>

									</li>

								<?php endwhile; ?>

							</ul>

						<?php endif; ?>

					</div>

				</div>

<?php get_footer();
