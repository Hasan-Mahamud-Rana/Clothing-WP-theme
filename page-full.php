<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h3 class="entry-title"><?php the_title(); ?></h3>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<!-- /.navigation --> 
				
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><span>' . __( '', 'foundationpress' ),'next_or_number' => 'next_and_number','nextpagelink'=> __('Next'),'previouspagelink' => __('Previous'), 'after' => '</span></nav>' ) ); ?>
				<span><?php the_tags(); ?></span>
			</footer>
			<?php comments_template(); ?>
		</article>
	    <?php endwhile; // End the loop ?>
	</div>
</div>
<?php get_footer(); ?>