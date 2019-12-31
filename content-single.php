<!-- loads elements of blog post -->

<div class="blog-post-single">

	<!-- Title of blog post -->
	<h1 class="blog-post-title-single">
		<?php the_title(); ?>		
	</h1>

	<?php if ( has_post_thumbnail() ) { ?>

		<!-- loads thumbnail if it exists -->
		<div class="blog-post-thumbnail-single">
			<?php the_post_thumbnail();?>
		</div>
	<?php } ?>

	<!-- loads content -->
	<div class="blog-post-content-single shadow">
		<?php the_content(); ?>
	</div>

	<!-- loads content previous/next post navigation -->
	<!-- (only if a previous/next post exists) -->
	<?php if ( is_singular( 'post' ) ) {
			the_post_navigation(
				array(
					'next_text' => 'Volgende &rarr;',
					'prev_text' => '&larr; Vorige',
				)
			);
		}
	?>

	<!-- Loads up the comment template -->
	<!-- (only if comments are open or a comment exists) -->
	<?php if ( comments_open() || get_comments_number() ) {
	comments_template();
	} 
	?>

</div>

