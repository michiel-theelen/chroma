<?php
/* Template Name: Blog */
/* Whoop Whoop Whoop Whoop*/

get_header(); ?>

<main id="blog">


	<div id="intro" class="scene">
	    <div class="content" style="padding-top:0">
	    	<h1>Blog</h1>
	        <p>Chroma2 is Bert Theelen, grafisch vormgever van communicatie-middelen die bestaan uit tekst en beeld. Bij het bedenken en uitwerken daarvan kan ik u van dienst zijn, op basis van brede vakkennis en praktijkervaring. Ik werk zelfstandig vanuit mijn woonplaats Deventer, met opdrachtgevers verspreid over het land. Samen werken we aan hoogwaardige producten, van logo tot website, van flyer tot boek.</p>
	    </div>
	</div>

	<!-- <h1 class="blog-title"><?php the_title(); ?></h1>  -->
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => - 1,
			);
			$q    = new WP_Query( $args );
		?>

		<div class="blog-container">
			<?php while ( $q->have_posts() ) : $q->the_post(); ?>
				<div class="blog-post">
					<a href="<?php the_permalink(); ?>">
						<div class="blog-post-thumbnail">
							<div class="blog-post-thumbnail-container">
								<img src="<?php echo get_the_post_thumbnail_url (); ?>">
								<div class="blog-post-thumbnail-plus">
								<p>&#43;</p>
								</div>
							</div>
						</div>
					</a>
					<div class="blog-post-icon">
					</div>
					<div class="blog-post-details">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>

						<span class="blog-post-date" style="width:auto">
							<?php echo get_the_date(); ?>
						</span>
						<div class="blog-post-excerpt">
							<p><?php the_excerpt(); ?></p>
						</div>
						<a href="<?php the_permalink(); ?>">
								<p style="color: rgb(0, 132, 165); font-size:14px; text-align: left;">
									Verder &#8594;
								</p>
						</a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

	<?php endwhile; ?>
</main>

<div  id="Beelden" class="scene blue" style="padding: 50px;">
    <div class="content" style="max-width: 800px;">
        <p>Beelden om een verhaal te ondersteunen zijn belangrijker dan ooit, vaak zijn de rollen zelfs omgedraaid. Een vormgever moet dus getraind zijn in het ontdekken en beoordelen van beeldmateriaal. Leren kijken kan overal, maar bij uitstek in één van de prachtige botanische tuinen die Nederland rijk is. Bijvoorbeeld het arboretum Trompenburg in Rotterdam.</p>
        <p><i>Alle fotografie is van mijzelf tenzij anders aangegeven. De slider hieronder komt uit mijn collecties op flickr.</i></p>
    </div>
</div>

<?php get_footer();
