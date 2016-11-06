<?php /* Template Name: Landing */ ?>

<?php get_header(); ?>

	<main class="background">

<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sapien arcu, egestas ut enim in, finibus sagittis nulla. Sed et nisl urna. Mauris enim dolor, pretium nec mi nec, suscipit pretium orci. Vestibulum id lacus dui. Proin justo sapien, commodo id massa efficitur, accumsan sodales quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis erat sit amet quam interdum vestibulum. Ut dictum, diam eget luctus tristique, quam sem vestibulum lorem, quis maximus mauris ipsum sit amet massa. Nulla vel viverra tellus. Ut nec aliquet ex. Maecenas fringilla facilisis scelerisque. Aenean viverra viverra orci, nec fermentum mi auctor vitae. Vestibulum luctus mauris a nisl venenatis, at placerat enim mattis. Ut commodo est maximus risus luctus rhoncus.

Nulla pharetra semper vestibulum. Sed suscipit leo sed erat dapibus convallis. Fusce mollis turpis nisi, eu luctus sem dignissim eget. Suspendisse potenti. Proin vitae augue sit amet velit tempus ultricies. Fusce eleifend porta lacinia. Ut ullamcorper tortor eu tortor aliquet, eu convallis arcu placerat. Aenean id magna mattis velit vestibulum imperdiet. Proin posuere lacus non feugiat laoreet. Vestibulum neque sapien, cursus nec ligula in, hendrerit consequat diam. Donec eget augue nisl.

Mauris dignissim molestie metus, vel porta est viverra vel. Vivamus dolor sem, faucibus eu arcu id, vehicula euismod diam. Vestibulum ut ultricies odio. Ut id tempor elit. Nunc nec arcu maximus, luctus leo ut, condimentum lorem. Donec laoreet nec risus fermentum ornare. Nulla et dolor vitae magna tristique rhoncus eu ac ipsum. Ut finibus, mi id placerat tincidunt, augue nibh rhoncus justo, posuere aliquet sapien nisi id justo. Morbi interdum odio quis venenatis tincidunt. Phasellus tristique urna enim.

Etiam vestibulum libero sit amet ornare viverra. Cras bibendum sed est nec dictum. Quisque id odio odio. Pellentesque a egestas metus. Donec elementum justo et mi viverra suscipit. Mauris risus erat, hendrerit eget ullamcorper vitae, pulvinar ac libero. Sed sollicitudin, est ac semper finibus, felis ligula auctor nulla, nec pulvinar mi tortor quis ipsum. Nam pellentesque sapien massa, non faucibus massa molestie non. Proin tellus purus, convallis in nunc non, malesuada efficitur tellus. Cras mattis magna id dapibus tempor. Suspendisse id tellus lacinia, blandit nunc a, ultrices quam. Ut nec eros fringilla, auctor magna imperdiet, iaculis odio. Etiam fermentum non enim nec sagittis. In hac habitasse platea dictumst. Etiam vehicula est massa, eu dapibus sem fringilla sed.

Vestibulum convallis, libero at tempor dictum, diam velit eleifend leo, non rutrum elit nisl at massa. Quisque nec nibh nec diam iaculis interdum et a ligula. Ut at massa a ante lacinia tempus. Aenean non justo purus. Nunc posuere hendrerit felis a porttitor. Vestibulum condimentum auctor libero, id vulputate neque mattis a. Pellentesque et enim malesuada, sagittis sapien nec, fringilla metus. Phasellus dui diam, cursus nec odio eu, laoreet condimentum tellus. Maecenas et consequat nisi, vel faucibus lorem.</p>

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
