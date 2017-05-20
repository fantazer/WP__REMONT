<!DOCTYPE html>
<html lang="en">
<head> 
 <meta charset="utf-8"> 
 <title>new site</title> 
  <link defer type="image/x-icon" rel="icon" href="favicon-M.ico">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head> 
<body>
<div class="slider-wraper_small">
	<!-- dark-top -->
		<div class="slider-dark-row">
			<div class="container">
		    	<div class="row">
		    		<div class="col-md-6 col-xs-12 col-sm-6 logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"  alt=""></a></div>
		    		<div class="col-md-6 col-xs-12 col-sm-6">
		    			<!-- <p class="tar">Партийный переулок д 1</p> -->
		    			<div class="line_link">
		    				<!-- <a href="#contact_form_pop" class="fancybox"><p class="yellow">Заказать звонок</p></a>  -->
		    				<a href="/contact_form"><p class="yellow"><?php echo do_shortcode('[cvem_cv name="mail"]'); ?></p></a> 
		    				<a href="/contact_form" class="flr"><p class="yellow">г. Москва</p></a> 
		    			</div>
		    			<div class="clear"></div>
		    			<div class="phone white tar font"><?php echo do_shortcode('[cvem_cv name="phone"]'); ?></div>
		    			<!-- <div class="phone white tar font">8 (499) 390-95-19</div> -->
		    			<div class="top_menu">
		    				<ul>
		    					<a href="/" class="curent"><li>Главная</li></a>
		    					<a href="/service.php"><li>Услуги</li></a>
		    					<a href="/price.php"><li>Цены</li></a>
		    					<a href="/contact_form.php"><li>Контакты</li></a>
		    				</ul>
		    				<div class="clear"></div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		</div>
	<!-- dark-top -->
</div> 

<!-- всплывающее окно -->
<!--  <div  class="fancybox-hidden">
        <div id="contact_form_pop"> 
          <p class="tac form__topText">Перезвоним через 4 минуты</p>               
          <?php echo do_shortcode('[contact-form-7 id="220" title="Обратный звонок"]'); ?>
        </div>
 </div> -->
<!-- всплывающее окно -->

