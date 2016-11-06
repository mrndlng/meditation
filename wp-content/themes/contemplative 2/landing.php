<?php /* Template Name: Landing */ ?>

<?php get_header(); ?>

	<main class="background">

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt dapibus justo, eget ornare libero porta vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius imperdiet libero, sed condimentum nunc vulputate elementum. Sed mattis justo ut sapien fermentum elementum. Phasellus vehicula, est at placerat molestie, ex risus venenatis turpis, a consequat lectus purus sit amet mi. Morbi lorem mauris, aliquam id dictum congue, commodo ac magna. Etiam volutpat vulputate rutrum. Nam bibendum, tellus ac posuere vulputate, tellus lorem condimentum mi, in ultrices neque nunc sit amet lorem. Maecenas facilisis a arcu sed pretium. Morbi magna ex, bibendum id viverra in, convallis a turpis. Suspendisse magna libero, mollis non dolor in, molestie molestie turpis. Duis hendrerit magna sit amet ornare consectetur. Donec molestie tellus ut ornare posuere. Vivamus vitae mi scelerisque lectus facilisis pharetra sed at est.

Morbi non aliquam erat. Morbi malesuada odio et nisl porta placerat. Praesent a sagittis lectus. Praesent porta, ipsum vitae imperdiet euismod, lorem nulla bibendum dui, at suscipit quam massa vitae libero. Sed sed molestie ligula, sit amet venenatis tortor. Proin in dui nec metus dapibus rutrum. Nullam ante neque, iaculis vitae justo vitae, egestas suscipit ex. Mauris vel tellus ipsum. Nunc varius, elit quis vestibulum aliquet, magna mauris facilisis nisi, eget semper erat felis ac ex. Suspendisse a urna ligula. Vivamus at erat et ex blandit dapibus in nec augue. Donec blandit ante vitae lacinia cursus. Nullam a semper turpis. Aliquam lacinia non sem id finibus. Nam arcu lacus, pulvinar et arcu eu, pulvinar euismod massa. Praesent aliquet odio mauris.</p>

		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
