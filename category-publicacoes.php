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
	<h2><?php echo single_cat_title(); ?></h2>
	<?php 
	if ($resArtigosCongressos->have_posts()) : ?>
		<h3>Artigos - Congressos</h3>
		<div class="item contentPublicacoes">	
		<?php while ($resArtigosCongressos->have_posts()) : $resArtigosCongressos->the_post(); ?>
			<div class="artigos">
				<h4>
					<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a>
				</h4>
				<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_excerpt(); ?></a>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php 
	if ($resArtigosRevistas->have_posts()) : ?>
		<h3>Artigos - Revistas</h3>
		<div class="item contentPublicacoes">	
		<?php while ($resArtigosRevistas->have_posts()) : $resArtigosRevistas->the_post(); ?>
			<div class="artigos">
				<h4>
					<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a>
				</h4>
				<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_excerpt(); ?></a>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php 
	if ($resDissertacoes->have_posts()) : ?>
		<h3>Dissertações</h3>
		<div class="item contentPublicacoes">	
		<?php while ($resDissertacoes->have_posts()) : $resDissertacoes->the_post(); ?>
			<div class="artigos">
				<h4>
					<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a>
				</h4>
				<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_excerpt(); ?></a>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php 
	if ($resTeses->have_posts()) : ?>
		<h3>Teses</h3>
		<div class="item contentPublicacoes">	
		<?php while ($resTeses->have_posts()) : $resTeses->the_post(); ?>
			<div class="artigos">
				<h4>
					<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a>
				</h4>
				<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_excerpt(); ?></a>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>	
</div>
<?php get_footer(); ?>