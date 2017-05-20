<?php get_header(); ?>


<div class="main-cont">
	<div class="main-wrap">
		<div class="left-col">

			<!-- get-order-small -->
				<? include 'include/order-small.php';?>
			<!-- get-order-small -->
			
			<div class="left-col__title">Популярные услуги</div>

			<!-- popular service -->
			<div class="popular-service">
				 <?
					$args = array(
					'orderby' => 'date', 
					'order' => 'ASC',
					'tag' => 'popular',
					 'posts_per_page' => 7
					);
				?>
				<? query_posts($args);?>
				<? while (have_posts()) : the_post(); ?>
					<a href="<?=get_permalink(); ?>" class="popular-service__el"><?=get_the_title(); ?></a>
				<? endwhile; ?> 
				<? wp_reset_query();?> 
			</div>
			<!-- popular service -->
			
			<!-- news -->

			<div class="left-col__title">Наши новости</div>
			<div class="get-news">
				<?
					$args = array(
					'orderby' => 'date', 
					'order' => 'ASC',
					'cat' => 9,
					 'posts_per_page' => 5
					);
				?>
				<? query_posts($args);?>
				<? while (have_posts()) : the_post(); ?>
					<a href="<?=get_permalink(); ?>" class="get-news__el">
					<div class="get-news__content">
						<div class="get-news__title"><?=get_the_title(); ?></div>
						<div class="get-news__text"><?=wp_trim_words( get_the_content(), 20, ' ...' )?></div>
					</div>
				</a>
				<? endwhile; ?> 
				<? wp_reset_query();?> 
			</div>

		</div>
		<div class="content-item">
			<div class="bread-crambs-wrap">
					<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
			</div>
			<h1 ><?=get_the_title();?></h1>
			<?=the_content();?>
		</div>
	</div>
</div>
<!--section sheme-->


<!--Form Order-->
	<? include 'include/form.php';?>
<!--Form Order-->


<?php get_footer(); ?>
