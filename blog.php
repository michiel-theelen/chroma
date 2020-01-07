<?php
/* Template Name: Blog */
/* Whoop Whoop Whoop Whoop*/

get_header(); ?>

<main id="blog">


	<div id="intro" class="scene" style="display: flex; flex-wrap: wrap; flex-direction: row">
	    	<h1 style="display: inline-block; min-width: 200px; margin-top: 0;">Blog</h1>
	      <p style="flex: 1; min-width: 67%">Chroma is Bert Theelen, grafisch vormgever van communicatie-middelen die bestaan uit tekst en beeld. Bij het bedenken en uitwerken daarvan kan ik u van dienst zijn, op basis van brede vakkennis en praktijkervaring. Ik werk zelfstandig vanuit mijn woonplaats Deventer, met opdrachtgevers verspreid over het land. Samen werken we aan hoogwaardige producten, van logo tot website, van flyer tot boek.</p>
	</div>

	<style>
.container {
  margin-top: 20px;
  overflow: hidden;
	float: right;
}

/* Style the buttons */
.search-container {
	display: flex;
	flex-wrap: wrap;
}

.category-container{
	display: flex;
	flex-grow: 1;
	flex-basis: auto;
	flex-wrap: nowrap;
	width: auto;
	justify-content: space-between;
}
.category-filter {
display: inline-block;
flex-basis: auto;
flex-grow: 1;
width: auto;
align-items: center;
font-size: 1.6rem;
padding: 1em 1em;
background: #ebf1fe;
border-radius: 4px;
margin: 0 .5em;
height: 100%;
font-weight: 600;
color: #5183f5;
cursor: pointer;
border: none;
}

.category-filter:hover{
	text-decoration: none;
}
.category-container .category-filter.active:hover {
color: #fff;
background: #2161f2;
}
.category-container .category-filter:hover {
background: #d8e3fd;
color: #3972f4;
}
.category-container .category-filter.active {
background: #5183f5;
color: #fff;
}

</style>

<div class="search-container">
	<fieldset style="min-width: 40%; flex:1;">
			<input type="search" class="text-input" id="live-search" placeholder="Type hier om te zoeken binnen mijn blog..." />
			<!-- <span id="filter-count" style="display: flex; align-self: center; height: 50px; line-height:50px;width: 30px; margin-left: 1em; color: var(--blog-color);" ></span> -->
	</fieldset>

<div class="category-container">
		<!-- <button class="category-filter">Alles</button> -->
		<?php $categories=get_categories($cat_args);
		  foreach($categories as $category) {
		    echo '<button class="category-filter" id="category-' . $category->slug . '">' . $category->name . '</button>';
		  } // foreach($categories
		?>
	</div> <!-- category-container -->
</div> <!-- search-container -->

	<?php while ( have_posts() ) : the_post(); ?>

		<?php
			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => - 1,
			);
			$q    = new WP_Query( $args );
		?>

		<div id="blog" class="blog-container" >

			<?php while ( $q->have_posts() ) : $q->the_post(); ?>

				<div <?php post_class( 'blog-post' ); ?>>
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
						<div class="blog-post-excerpt" style="height:140px; overflow: hidden; text-overflow: ellipsis;">
							<?php the_content(); ?>
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

<?php putRevSlider( 'revslider_flickr' ); ?>
<?php get_footer();
