<?php 
get_header(); 
global $wp_query;

$paged 			= (get_query_var('paged')) ? get_query_var('paged') : 1;
$argsDefault 	= array("post_status" => "publish", "posts_per_page" => 9, "paged" => $paged);
$argsCategoria = array_merge($wp_query->query_vars, $argsDefault);
$resPosts = new WP_Query($argsCategoria);
?>
<br class="show-for-medium">
<div class="row content" data-equalizer data-equalize-on="medium" id="contentCategory">
	<?php if ( function_exists('yoast_breadcrumb') ){
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>
	<h2><?php echo single_cat_title(); ?></h2>
	<?php if ($resPosts->have_posts()) : while ($resPosts->have_posts()) : $resPosts->the_post(); 
		$currentPost 	= ($resPosts->current_post + 1);
		$end 			= ($currentPost == $resPosts->found_posts) ? 'end' : '';
	?>
		<div class="item columns small-12 medium-6 large-4 <?php echo $end;?>">
			<div data-equalizer-watch>
				<?php if (has_post_thumbnail()) : ?>
					<div class="itemImg">
						<a href="<?php echo get_permalink();?>" title="<?php the_title();?>">
							<?php the_post_thumbnail('thumb-category'); ?>
						</a>
					</div>
				<?php endif; ?>
				<h4>
					<a href="<?php echo get_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
				</h4>
				<div class="contentIntro">
					<?php the_excerpt(); ?>
				</div>
				<a href="<?php echo get_permalink();?>" class="button alert">Mais Informações</a>		
			</div>
		</div>
	<?php endwhile;
	endif; 
	?>
	<div class="row">
		<div class="columns small-6 small-centered paginacaoPosts">
			<?php 
			$wp_query->max_num_pages = $resPosts->max_num_pages;
			the_posts_pagination( array(
					'prev_text' => __( 'Anterior', 'textdomain' ),
					'next_text' => __( 'Próximo', 'textdomain' )
				) ); 
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>