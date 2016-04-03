<?php get_header(); ?>
<br class="show-for-medium">
<div class="row content" id="pageSearch">
	<?php if ( function_exists('yoast_breadcrumb') ){
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} 
	if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="columns medium-6">
		<div class="itemCat">Em <?php the_category(" | "); ?></div>
		<?php if (has_post_thumbnail()) : ?>
		<div class="">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('thumb-category'); ?>	
			</a>
		</div>
		<?php endif; ?>
		<div class="itemContent">
			<h3><?php the_title(); ?></h3>	
			<div class="contentIntro">
		    	<?php the_excerpt(); ?>
		    </div>
		    <a href="<?php the_permalink();?>" class="button alert">Leia Mais</a>		
		</div>
	</div>
	<?php 
		endwhile;
	endif; 
	if (function_exists('wp_pagenavi'))
		wp_pagenavi();
	?>
</div>
<?php get_footer(); ?>