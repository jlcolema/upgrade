<div id="next" class="section s-subnavigation">

	<div class="inner-wrap s-inner-wrap s-subnavigation__inner-wrap">

		<div class="c-subnavigation">

			<div class="c-subnavigation__logo">

				<a href="/" class="c-subnavigation__logo-link">Upgrade</a>

			</div>

			<nav id="" class="c-subnavigation__nav" role="navigation">

				<div class="c-subnavigation__section">

					<a href="/personal-loans/" class="c-subnavigation__section-link">Personal Loans</a>

				</div>

				<ul class="c-subnavigation__list">

					<?php

						$loan_settings = array(

							'numberposts'	=> -1,
							'post_type'		=> 'loan',
							'orderby'		=> 'date', // 'menu_order'
							'post_status'	=> 'publish',
							'order'			=> 'ASC' // 'ASC'

						);

						$loans = get_posts( $loan_settings );

					?>

					<?php foreach ( $loans as $loan ) : ?>

						<?php

							// Variables...

						?>

						<li class="c-subnavigation__item">

							<a href="<?php echo get_permalink( $loan->ID ); ?>#next" class="c-subnavigation__item-link"><?php echo $loan->post_title; ?></a>

						</li>

					<?php endforeach; ?>

				</ul>

			</nav>

			<div class="c-subnavigation__more">

				<div class="c-subnavigation__button">

					<span class="c-subnavigation__button-link">Check Your Rate</span>

				</div>

				<p class="c-subnavigation__note">Checking your rate won&rsquo;t impact your credit score</p>

			</div>

		</div>

	</div>

</div>
