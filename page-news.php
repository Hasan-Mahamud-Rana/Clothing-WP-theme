<?php
/*
Template Name: News 
*/
get_header(); ?>
<div class="row">
	<header><h1 class="entry-title"><?php the_title(); ?></h1></header>
	<div class="small-12 large-12 columns" role="main">
		<?php query_posts('category_name=news&post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>
		<?php if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>
		<div class="text-center" id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
				<div><?php the_content(); ?></div>
				<div><?php the_post_thumbnail(); ?></div>    
				<div>&nbsp;</div>    
		</div> 
	<?php endwhile; ?>
	<div class="large-12 columns navigation text-center">
		<?php echo paginate_links( $args ); ?>
	</div><!-- /.navigation -->
<?php else: ?>
	<div id="post-404" class="noposts">
		<p><?php _e('None found.','example'); ?></p>
	</div><!-- /#post-404 -->
<?php endif; wp_reset_query(); ?>
</div>
</div>
<?php get_footer(); ?>