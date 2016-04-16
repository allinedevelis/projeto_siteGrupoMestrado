<?php 
get_header(); 
$resPage = new WP_Query("page_id=2");
?>
<br>
			<?php if ($resPage->have_posts()): $resPage->the_post(); ?>
			<div class="row columns content" id="contentHome">
				<h2><?php the_title(); ?></h2>
				<div class="contentIntro">
				    <?php the_content(); ?>
				</div>
			</div>
		<?php endif; ?>
<?php get_footer(); ?>