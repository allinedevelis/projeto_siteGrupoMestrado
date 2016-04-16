<?php 
get_header(); 
global $wp_query;

$paged 			= (get_query_var('paged')) ? get_query_var('paged') : 1;
$argsDefault 	= array("post_status" => "publish", "posts_per_page" => 2, "paged" => $paged);
$argsCategoria = array_merge($wp_query->query_vars, $argsDefault);
$resPosts = new WP_Query($argsCategoria);
?>
<br class="show-for-medium">
<div class="row content" id="contentCategory">
	<h2><?php echo single_cat_title(); ?></h2>
	<?php if ($resPosts->have_posts()) : while ($resPosts->have_posts()) : $resPosts->the_post(); 
		$currentPost 	= ($resPosts->current_post + 1);
		$end 			= ($currentPost == $resPosts->found_posts) ? 'end' : '';
	?>
		<div class="item columns small-12 medium-6 large-4 <?php echo $end;?>">
			<?php if (has_post_thumbnail()) : ?>
				<div class="itemImg">
					<a href="<?php echo get_permalink();?>" title="<?php the_title();?>">
						<?php the_post_thumbnail('thumb-category'); ?>
					</a>
				</div>
			<?php endif; ?>
			<div class="itemContent">
				<h4><?php the_title();?></h4>
				<div class="contentIntro">
					<?php the_excerpt(); ?>
				</div>
				<a href="<?php echo get_permalink();?>" class="button alert">Mais Informações</a>		
			</div>
		</div>
	<?php endwhile;
	endif; 
	if (function_exists('wp_pagenavi')) : ?>
		<div class="columns small-2 medium-text-center float-right navPagenavi">
			<?php wp_pagenavi(array('query' => $resPosts)); ?>
		</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>