<!--Include style-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<link defer type="image/x-icon" rel="icon" href="favicon-M.ico">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-edit.css" />
		<link rel="stylesheet" href="http://webfonts.ru/import/ristrettopro.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic,cyrillic-ext" />
		<?php wp_enqueue_script('jquery'); ?>
		<script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
		<?php wp_head(); ?>
	</head>

<body>


<div class="header">
	<div class="header-top">
		<div class="main-cont">
			<div class="header-top-wraper">
				<div class="header-logo">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" />
					</a>
				</div>
				<div class="header-search">
					<?php get_search_form(); ?> 
					<div class="header-contact-worktime">По телефону с 9.00 до 23.00 Онлайн - круглосуточно. Без выходных. </div>
					<div class="header-search-icon">
						<svg class="icon">
							<use xlink:href="#magnifying-glass"></use>
						</svg>
					</div>
				</div>
				<div class="header-contact">
					<a href="#" class="header-contact-phone"><?=get_field('phone', 'option');?></a>
					<a href="#" class="header-contact-mail"><?=get_field('mail', 'option');?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="main-cont header-navigation-wrap">
		<div class="header-navigation-toggle">
			<a href="#my-menu" class="header-navigation-toggle__el">
				<svg class="icon">
					<use xlink:href="#menu"></use>
				</svg>
				<span>Меню</span>
			</a>
		</div>
		<div class="header-navigation">

			<?php if ($menu_items = wp_get_nav_menu_items('main')): ?>
					<?php foreach ((array) $menu_items as $key => $menu_item ): ?>
						<?php if($menu_item->object_id=='13'): ?>
							<div class="header-navigation__el">
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
								<span class="header-navigation-caret">
									<svg class="icon">
										<use xlink:href="#arrow-down"></use>
									</svg>
								</span>
								<div class="header-navigation__sub">
									 <?
										$args = array(
										'cat'=> 2,
										'orderby' => 'date', 
										'posts_per_page' => 15,
										'order' => 'ASC'
										);
									?>
									<? query_posts($args);?>
									<? while (have_posts()) : the_post(); ?>
											<div class="header-navigation__sub-el">
												<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
											</div>
									<? endwhile; ?> 
									<? wp_reset_query();?> 
								</div>
							</div>
						
						<?php elseif($menu_item->object_id=='36'): ?>
							<div class="header-navigation__el">
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
								<span class="header-navigation-caret">
									<svg class="icon">
										<use xlink:href="#arrow-down"></use>
									</svg>
								</span>
								<div class="header-navigation__sub">
									 <?
										$args = array(
										'cat'=> 6,
										'orderby' => 'date', 
										'posts_per_page' => 15,
										'order' => 'ASC'
										);
									?>
									<? query_posts($args);?>
									<? while (have_posts()) : the_post(); ?>
											<div class="header-navigation__sub-el">
												<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
											</div>
									<? endwhile; ?> 
									<? wp_reset_query();?> 
								</div>
							</div>

						<?php elseif($menu_item->object_id=='15'): ?>
							<div class="header-navigation__el">
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
								<span class="header-navigation-caret">
									<svg class="icon">
										<use xlink:href="#arrow-down"></use>
									</svg>
								</span>
								<div class="header-navigation__sub">
									 <?
										$args = array(
										'cat'=> 3,
										'orderby' => 'date', 
										'posts_per_page' => 15,
										'order' => 'ASC'
										);
									?>
									<? query_posts($args);?>
									<? while (have_posts()) : the_post(); ?>
											<div class="header-navigation__sub-el">
												<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
											</div>
									<? endwhile; ?> 
									<? wp_reset_query();?> 
								</div>
							</div>

						<?php elseif($menu_item->object_id=='16'): ?>
							<div class="header-navigation__el">
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
								<span class="header-navigation-caret">
									<svg class="icon">
										<use xlink:href="#arrow-down"></use>
									</svg>
								</span>
								<div class="header-navigation__sub">
									 <?
										$args = array(
										'cat'=> 4,
										'orderby' => 'date', 
										'posts_per_page' => 15,
										'order' => 'ASC'
										);
									?>
									<? query_posts($args);?>
									<? while (have_posts()) : the_post(); ?>
											<div class="header-navigation__sub-el">
												<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
											</div>
									<? endwhile; ?> 
									<? wp_reset_query();?> 
								</div>
							</div>
						
						<?php else: ?>
							<div class="header-navigation__el">
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
							</div>
						<?php endif ?>

					<?php endforeach ?>
			<?php endif ?>
		</div>
	</div>
</div>
<!-- <div class="main-cont ">
	<div class="templ-menu">
	<?php if ($menu_items = wp_get_nav_menu_items('main')): ?>
			<?php foreach ((array) $menu_items as $key => $menu_item ): ?>
				
				<?php if($menu_item->object_id=='13'): ?>
					<div class="header-nav__el">
						<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
						 <?
							$args = array(
							'cat'=> 2,
							'orderby' => 'date', 
							'order' => 'ASC'
							);
						?>
						<? query_posts($args);?>
						<? while (have_posts()) : the_post(); ?>
								<div class="header-nav__el-sub-el">
									<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
								</div>
						<? endwhile; ?> 
						<? wp_reset_query();?> 
					</div>
				
				<?php elseif($menu_item->object_id=='36'): ?>
					<div class="header-nav__el">
						<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
				
						 <?
							$args = array(
							'cat'=> 6,
							'orderby' => 'date', 
							'order' => 'ASC'
							);
						?>
						<? query_posts($args);?>
						<? while (have_posts()) : the_post(); ?>
								<div class="header-nav__el-sub-el">
									<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
								</div>
						<? endwhile; ?> 
						<? wp_reset_query();?> 
					</div>

				<?php elseif($menu_item->object_id=='15'): ?>
					<div class="header-nav__el">
						<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
						 <?
							$args = array(
							'cat'=> 3,
							'orderby' => 'date', 
							'order' => 'ASC'
							);
						?>
						<? query_posts($args);?>
						<? while (have_posts()) : the_post(); ?>
								<div class="header-nav__el-sub-el">
									<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
								</div>
						<? endwhile; ?> 
						<? wp_reset_query();?> 
					</div>

				<?php elseif($menu_item->object_id=='16'): ?>
					<div class="header-nav__el">
						<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
					
					 <?
						$args = array(
						'cat'=> 4,
						'orderby' => 'date', 
						'order' => 'ASC'
						);
					?>
					<? query_posts($args);?>
					<? while (have_posts()) : the_post(); ?>
							<div class="header-nav__el-sub-el">
								<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
							</div>
					<? endwhile; ?> 
					<? wp_reset_query();?> 
				</div>
				
				<?php else: ?>
				<div class="header-nav__el">
						<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
				</div>
				<?php endif ?>

			<?php endforeach ?>
	<?php endif ?>
	</div>
</div>
  -->