<?php 
get_header(); 
$resPage = new WP_Query("page_id=2");
?>
<br>
			<div class="row columns">
				<div class="orbit hide" role="region" aria-label="Favorite Space Pictures" data-orbit>
				  <ul class="orbit-container">
				    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
				    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
				    <li class="is-active orbit-slide">
				      <img class="orbit-image" src="<?php bloginfo('template_url')?>/img/01.jpg" alt="Space">
				      <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
				    </li>
				    <li class="orbit-slide">
				      <img class="orbit-image" src="<?php bloginfo('template_url')?>/img/02.jpg" alt="Space">
				      <figcaption class="orbit-caption">Lets Rocket!</figcaption>
				    </li>
				    <li class="orbit-slide">
				      <img class="orbit-image" src="<?php bloginfo('template_url')?>/img/03.jpg" alt="Space">
				      <figcaption class="orbit-caption">Encapsulating</figcaption>
				    </li>
				    <li class="orbit-slide">
				      <img class="orbit-image" src="<?php bloginfo('template_url')?>/img/04.jpg" alt="Space">
				      <figcaption class="orbit-caption">Outta This World</figcaption>
				    </li>
				  </ul>
				  <nav class="orbit-bullets">
				    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
				    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
				    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
				  </nav>
				</div>
			</div>

			<?php if ($resPage->have_posts()): $resPage->the_post(); ?>
			<div class="row columns content" id="contentHome">
				<h3><?php the_title(); ?></h3>
				<div class="contentIntro">
				    <?php the_content(); ?>
				</div>
			</div>
		<?php endif; ?>
<?php get_footer(); ?>