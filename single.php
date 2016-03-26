<?php 
get_header(); 
the_post();
?>
<br class="show-for-medium">
<div class="row columns contentSingle">
	<h2><?php the_title(); ?></h2>
	<div id="contentIntro">
	    <?php the_content(); ?>
	</div>
</div>
<?php get_footer(); ?>