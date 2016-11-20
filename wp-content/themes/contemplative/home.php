<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php
				$recent_posts = wp_get_recent_posts( array('numberposts' => 10, 'post_status' => 'publish',) );
				foreach($recent_posts as $recent):
			?>
				<?php // var_dump($recent); ?>
				<article id="post-<?php echo $recent['ID']; ?>" <?php echo $recent['post_class']; ?>>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail($recent['ID'])) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink($recent['ID']); ?>" title="<?php echo $recent['post_title'] ?>">
							<?php echo get_the_post_thumbnail($recent['ID'], array(1000,1000)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<a href="<?php the_permalink($recent['ID']); ?>" title="<?php echo $recent['post_title'] ?>"><h2><?php echo $recent['post_title'] ?></h2></a>
					<?php //miranda_excerpt($recent['ID'], 'html5wp_index'); ?>
					<p><?php echo $recent['post_excerpt'] ?> <a href="<?php the_permalink($recent['ID']); ?>">read more</a></p>

					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

					<?php // edit_post_link(); ?>
			<?php endforeach; ?>


			<?php // get_template_part('loop'); ?>

			<?php // get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>