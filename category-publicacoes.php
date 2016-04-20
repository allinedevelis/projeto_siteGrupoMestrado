<?php 
get_header(); 
global $wp_query;

$argsDefault = array("post_status" => "publish", "posts_per_page" => 3);

$argsArtigosCongressos 	= array_merge($argsDefault, array("category_name" => "artigos-congressos"));
$resArtigosCongressos 	= new WP_Query($argsArtigosCongressos);

$argsArtigosRevistas 	= array_merge($argsDefault, array("category_name" => "artigos-revistas"));
$resArtigosRevistas 	= new WP_Query($argsArtigosRevistas);

$argsDissertacoes 		= array_merge($argsDefault, array("category_name" => "dissertacoes"));
$resDissertacoes 		= new WP_Query($argsDissertacoes);

$argsTeses 				= array_merge($argsDefault, array("category_name" => "teses"));
$resTeses 				= new WP_Query($argsTeses);
?>
<br class="show-for-medium">
<div class="row columns content" id="contentCategory">
	<?php if ( function_exists('yoast_breadcrumb') ){
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>
	<h2><?php echo single_cat_title(); ?></h2>
	<?php 
	if ($resArtigosCongressos->have_posts()) : ?>
		<div class="row contentPublicacoes" data-equalizer data-equalize-on="medium">	
			<h3>Artigos - Congressos</h3>
		<?php while ($resArtigosCongressos->have_posts()) : 
				$resArtigosCongressos->the_post(); 
				$currentPost 	= ($resArtigosCongressos->current_post + 1);
				$end 			= ($currentPost == $resArtigosCongressos->found_posts) ? 'end' : '';
		?>
			<div class="columns small-12 medium-6 large-4 <?php echo $end;?>">
				<div data-equalizer-watch>
					<?php if (has_post_thumbnail()) : ?>
					<div class="itemImg">
						<a href="<?php echo get_permalink();?>" title="<?php the_title();?>">
							<?php the_post_thumbnail('thumb-category'); ?>
						</a>
					</div>
				<?php endif; ?>
					<h4><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h4>
				</div>
			</div>
		<?php endwhile; 
		if ($resArtigosCongressos->found_posts > 3) : ?>
			<a href="<?php echo get_bloginfo('url')?>/publicacoes/artigos-congressos/" class="button alert small float-right">Ver todos</a>
		<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php 
	if ($resArtigosRevistas->have_posts()) : ?>
		<div class="row contentPublicacoes" data-equalizer data-equalize-on="medium">	
			<h3>Artigos - Revistas</h3>
		<?php while ($resArtigosRevistas->have_posts()) : 
				$resArtigosRevistas->the_post(); 
				$currentPost 	= ($resArtigosRevistas->current_post + 1);
				$end 			= ($currentPost == $resArtigosRevistas->found_posts) ? 'end' : '';
		?>
			<div class="columns small-12 medium-6 large-4 <?php echo $end;?>">
				<div data-equalizer-watch>
					<?php if (has_post_thumbnail()) : ?>
					<div class="itemImg">
						<a href="<?php echo get_permalink();?>" title="<?php the_title();?>">
							<?php the_post_thumbnail('thumb-category'); ?>
						</a>
					</div>
				<?php endif; ?>
					<h4><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h4>
				</div>
			</div>
		<?php endwhile; 
		if ($resArtigosRevistas->found_posts > 3) : ?>
			<a href="<?php echo get_bloginfo('url')?>/publicacoes/artigos-revistas/" class="button alert small float-right">Ver todos</a>
		<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php 
	if ($resDissertacoes->have_posts()) : ?>
		<div class="row contentPublicacoes" data-equalizer data-equalize-on="medium">
			<h3>Dissertações</h3>	
		<?php while ($resDissertacoes->have_posts()) : 
				$resDissertacoes->the_post(); 
				$currentPost 	= ($resDissertacoes->current_post + 1);
				$end 			= ($currentPost == $resDissertacoes->found_posts) ? 'end' : '';
		?>
			<div class="columns small-12 medium-6 large-4 <?php echo $end;?>">
				<div data-equalizer-watch>
					<?php if (has_post_thumbnail()) : ?>
					<div class="itemImg">
						<a href="<?php echo get_permalink();?>" title="<?php the_title();?>">
							<?php the_post_thumbnail('thumb-category'); ?>
						</a>
					</div>
				<?php endif; ?>
					<h4><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h4>
				</div>
			</div>
		<?php endwhile; 
		if ($resDissertacoes->found_posts > 3) : ?>
			<a href="<?php echo get_bloginfo('url')?>/publicacoes/dissertacoes/" class="button alert small float-right">Ver todos</a>
		<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php 
	if ($resTeses->have_posts()) : ?>
		<div class="row contentPublicacoes" data-equalizer data-equalize-on="medium">	
			<h3>Teses</h3>
		<?php while ($resTeses->have_posts()) : 
				$resTeses->the_post(); 
				$currentPost 	= ($resTeses->current_post + 1);
				$end 			= ($currentPost == $resTeses->found_posts) ? 'end' : '';
		?>
			<div class="columns small-12 medium-6 large-4 <?php echo $end;?>">
				<div data-equalizer-watch>
					<?php if (has_post_thumbnail()) : ?>
					<div class="itemImg">
						<a href="<?php echo get_permalink();?>" title="<?php the_title();?>">
							<?php the_post_thumbnail('thumb-category'); ?>
						</a>
					</div>
				<?php endif; ?>
					<h4><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h4>
				</div>
			</div>
		<?php endwhile; 
		if ($resTeses->found_posts > 3) : ?>
			<a href="<?php echo get_bloginfo('url')?>/publicacoes/teses/" class="button alert small float-right">Ver todos</a>
		<?php endif; ?>
		</div>
	<?php endif; ?>	
</div>
<?php get_footer(); ?>