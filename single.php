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
			<? if ($page_id==124) {$current_cat = 11;}?>
			<? if ($page_id==126) {$current_cat = 12;}?>
			<? if ($page_id==44) {$current_cat = 13;}?> -->

				<? include 'include/links.php';?>
				

			<?
				$getMetro = get_field_object('metro');
				$getTown = get_field_object('town');
				$getArea = get_field_object('area');
				$getType = get_field_object('type');
				$getService = get_field_object('other_service');
				
				
				$fieldsService = array(
						"metro" => $getMetro["value"] ,
						"town" => $getTown["value"],
						"area" =>$getArea["value"],
						"type" =>$getType["value"],
						"other_service" => $getService["value"]
					);
				//var_dump($fieldsService);
				foreach ($fieldsService as $key => $value) {
					if ($value) {
						 $needField = $key;
					}
				}
			?> 
			

	

		<? wp_reset_query();?>
				<?
					function porstAfter($a){
							if( in_category($a) ){
								  global $needField;
				  				  global $post;
				  					$idPost = get_the_id();
				  					$PostArray = array();
			  						$args = array(
					  					'cat'=> $a,
					  					'order' => 'ASC',
					  					'posts_per_page' => 999,
			  						);
							
				  					query_posts($args);
				  					while (have_posts()) : the_post(); 
				  						
				  						if (strlen(get_field($needField)) > 1) {
				  							$name = get_the_id();
				  							array_push($PostArray, $name);
				  						}
				  				  endwhile; 
				  				  wp_reset_query();

				  				  //var_dump($PostArray);
				  				  $key = array_search($idPost, $PostArray);
				  				  $output = array_slice($PostArray, $key+1,3 );
				  				  $LastPost = array_pop($PostArray);

				  				  //Если это не последний элемент
				  				  if (!empty($output)) {
				  				  	 $postEl = array( 'include' =>$output,'post__not_in'=>$LastPost ,'order' => 'ASC');
				  					$myposts = get_posts($postEl);
				  					foreach( $myposts as $post ){ 
				  						setup_postdata($post);
				  						?>
				  						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				  						<?
				  					}
				  				  }
				  					wp_reset_postdata();

				  					// вывод если последнии
				  					$needPost =  3 - (count($PostArray) - $key);
				  					if ($needPost < 4 && $needPost > 0 ) {
					  						$args = array(
							  					'post__in'=> $PostArray,
							  					'posts_per_page' => $needPost,
							  					'order' => 'ASC',
					  						);
						  					query_posts($args);
						  					while (have_posts()) : the_post(); 
						  							?>
						  							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						  							<?
						  				  endwhile; 
						  				  wp_reset_query();


				  					}
				  					
								}
						}
				?>

					 
				<!-- ===== more-links ===== -->
				<? porstAfter(10);  ?>
				<? porstAfter(11);  ?>
				<? porstAfter(12);  ?>
				<? porstAfter(13);  ?>
				<? porstAfter(14);  ?>
				<? porstAfter(15);  ?>
				<? porstAfter(16);  ?>
				<? porstAfter(17);  ?>
				<? porstAfter(18);  ?>
				<? porstAfter(19);  ?>
				<? porstAfter(20);  ?>
				<? porstAfter(21);  ?>
				<? porstAfter(22);  ?>
				<? porstAfter(23);  ?>
				

		</div>
	</div>
</div>
<!--section sheme-->


<!--Form Order-->
	<? include 'include/form.php';?>
<!--Form Order-->


<?php get_footer(); ?>
