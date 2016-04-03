<?php 
get_header(); 
global $wp_query;
?>
<br class="show-for-medium">
<div class="row columns content" id="contentCategory">
	<h2><?php echo single_cat_title(); ?></h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="item">
			<?php if (has_post_thumbnail()) : ?>
				<div class="itemImg">
					<a href="<?php echo get_permalink();?>" title="<?php the_title();?>">
						<?php the_post_thumbnail('thumb-category'); ?>
					</a>
				</div>
			<?php endif; ?>
			<div class="itemContent">
				<h3><?php the_title();?></h3>
				<div class="contentIntro">
					<?php the_excerpt(); ?>
				</div>
				<a href="<?php echo get_permalink();?>" class="button alert">Mais Informações</a>		
			</div>
		</div>
	<?php endwhile;
	endif; 
	if (function_exists('wp_pagenavi'))
		wp_pagenavi();
	?>
</div>
<?php get_footer(); ?>