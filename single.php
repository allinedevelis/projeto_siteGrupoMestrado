<?php 
get_header(); 
the_post();
?>
<br class="show-for-medium">
<div class="row columns content" id="contentSingle">
	<?php if ( function_exists('yoast_breadcrumb') ){
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	} ?>
	<h2><?php the_title(); ?></h2>
	<div class="infoPost">
		<p><?php the_author(); ?> | <?php the_date("j \d\\e F \d\\e Y - H\hi"); ?></p>
	</div>
	<div class="contentIntro">
	    <?php the_content(); ?>
	</div>
</div>
<?php get_footer(); ?>