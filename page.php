<?php get_header(); ?>

<div class="main-cont">
	<div class="main-wrap">
        <? include 'include/left-col.php'; ?>
		<div class="content-item">
			<div class="bread-crambs-wrap">
					<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
			</div>
			<?php if (get_field('title')=='show'): ?>
				<h1 ><?=get_the_title();?></h1>
			<?php endif ?>
			<?=the_content();?>
		
			<!-- ===== more-links ===== -->
			<!-- 	<? 
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;
				$page_id = get_the_ID();
			?>
			
			
			<? if ($page_id==36) {$current_cat = 10;}?>
			<? if ($page_id==15) {$current_cat = 14;}?> -->
				
				
				<? include 'include/links.php';?>
				
			<!-- ===== more-links ===== -->
		</div>
	</div>
</div>
<!--section sheme-->


<!--Form Order-->
	<? include 'include/form.php';?>
<!--Form Order-->





<?php get_footer(); ?>
