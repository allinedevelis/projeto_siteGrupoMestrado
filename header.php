<!doctype html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/foundation.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/app.css?<?php echo rand(0,9999)?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?<?php echo rand(0,9999)?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />
	<?php wp_head(); ?>
</head>
<body <?php echo body_class(); ?>>

<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="title-bar" data-responsive-toggle="mainMenu" data-hide-for="medium">
	        <button class="menu-icon" type="button" data-toggle="offCanvas"></button>
	        <span class="title-bar-title">Menu</span>
        </div>
		<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
			<div class="closeMenu text-right">
				<button aria-label="Close menu" type="button" id="closeBtn" data-close>
					<i class="fa fa-times"></i>
				</button>
			</div>
			<?php 
			if ( has_nav_menu( 'menu-site' ) ) { 
				$argsMenuOffCanvas = array('menu_id' => 'menuOffCanvas', 
								'menu_class' => 'menu vertical', 
								'theme_location' => 'menu-site',
								'items_wrap' => '<ul id="%1$s" class="%2$s" data-drilldown data-back-button="<li class=js-drilldown-back><a><strong>Voltar</strong></a></li>">%3$s</ul>',
								'walker' => new My_Walker_Nav_Menu_offCanvas);
				wp_nav_menu( $argsMenuOffCanvas ); 
			}
			?>

			<!--<ul id="menuOffCanvas" class="hide menu vertical" data-drilldown data-back-button="<li class='js-drilldown-back'><a><strong>Voltar</strong></a></li>">
				<li><a href="#">Home</a></li>
				<li><a href="#">Linhas de Pesquisa</a></li>
				<li><a href="#">Projetos</a></li>
				<li><a href="#">Publicações</a>
					<ul class="menu vertical">
						<li><a href="#">Artigos - Congressos</a></li>
						<li><a href="#">Artigos - Revistas</a></li>
						<li><a href="#">Dissertações</a></li>
						<li><a href="#">Teses</a></li>
					</ul>
				</li>
				<li><a href="#">Equipe</a></li>
				<li><a href="#">Contato</a></li>
			</ul>-->

		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<header>
				<div id="searchBar" class="row expanded"  data-equalizer data-equalize-on="medium">
					<div class="columns medium-9 large-8 show-for-medium">
						<div class="row">
							<div class="columns small-12 medium-7 large-5 iconsApoio" data-equalizer-watch>
								<div class="row medium-collapse">
								  <div class="columns">
								    <a href="#"><img src="<?php bloginfo('template_url')?>/img/LOGO_UNESP_61x61.png" alt="Logo UNESP"></a>
								    <a href="#"><img src="<?php bloginfo('template_url')?>/img/LOGO_USP_61x61.png" alt="Logo USP"></a>
								    <a href="#"><img src="<?php bloginfo('template_url')?>/img/LOGO_UFPE_61x61.png" alt="Logo UFPE"></a>
								    <a href="#"><img src="<?php bloginfo('template_url')?>/img/LOGO_TAMU_61x61.png" alt="Logo TAMU"></a>
								  </div>
								  <!--<div class="row medium-collapse small-up-4">
								  <div class="columns">
								    <a href="#"><img src="<?php bloginfo('template_url')?>/img/LOGO_USP_61x61.png" alt="Logo USP"></a>
								  </div>
								  <div class="columns">
								    <a href="#"><img src="<?php bloginfo('template_url')?>/img/LOGO_UFPE_61x61.png" alt="Logo UFPE"></a>
								  </div>
								  <div class="columns">
								    <a href="#"><img src="<?php bloginfo('template_url')?>/img/LOGO_TAMU_61x61.png" alt="Logo TAMU"></a>
								  </div>
								  </div>-->
								</div>
							</div>
							<div class="columns contato medium-5 large-5 end" data-equalizer-watch>
								<div>
									<a href="mailto:gmms.feb@gmail.com"><i class="fa fa-envelope-o"></i></a>
									<a href="mailto:gmms.feb@gmail.com">gmms.feb@gmail.com</a>
								</div>
							</div>
						</div>
					</div>
					<div class="columns small-12 medium-3 large-4 searchForm" data-equalizer-watch>
						<div><?php get_search_form(); ?>
						</div>
					</div>
				</div>

				<div class="row expanded" id="boxLogos">
					<h1 class="small-6 medium-4 columns">
						<img src="<?php bloginfo('template_url')?>/img/logoGMMS.png" alt="Logo GMMS" class="float-center">
					</h1>
					<div class="medium-4 columns show-for-medium">
						<img src="http://placehold.it/450x183&text=LOGO" alt="company logo" class="float-center">			
					</div>
					<div class="small-6 medium-4 columns">

						<img src="<?php bloginfo('template_url')?>/img/logoUnesp.png" alt="Logo UNESP" class="float-center">
					</div>
				</div>
			</header>
			<div class="hide-for-small-only" data-sticky-container>
					<div class="sticky" data-sticky data-margin-top="0" data-top-anchor="anchortop" data-btm-anchor="anchorbottom">
						<?php
						if ( has_nav_menu( 'menu-site' ) ) { 
							$argsMenu = array(
											'container' => 'nav',
											'container_id' => 'mainMenu',
											'container_class' => 'top-bar',
											'menu_id' => '', 
											'menu_class' => 'menu horizontal expanded medium-text-center', 
											'theme_location' => 'menu-site',
											'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
											'walker' => new My_Walker_Nav_Menu);
							wp_nav_menu( $argsMenu ); 
						}
						?>

						<!--<nav class="top-bar" id="mainMenu">
							<ul class="menu horizontal expanded medium-text-center" data-dropdown-menu>
								<li><a href="#">Home</a></li>
								<li><a href="#">Linhas de Pesquisa</a></li>
								<li><a href="#">Projetos</a></li>
								<li><a href="#">Publicações</a>
									<ul class="menu vertical medium-text-left" data-submenu>
										<li><a href="#">Artigos - Congressos</a></li>
										<li><a href="#">Artigos - Revistas</a></li>
										<li><a href="#">Dissertações</a></li>
										<li><a href="#">Teses</a></li>
									</ul>
								</li>
								<li><a href="#">Equipe</a></li>
								<li><a href="#">Contato</a></li>
							</ul>
						</nav>-->
					</div>
				</div>
