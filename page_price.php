<?
/*
Template Name: price
*/
?>

<?php get_header(); ?>

<div class="content">
	<div class="main-cont">
		<div class="content__wraper">
			<!--block b-slider-->
			<? include('include/main-slider.php') ?>
			<!--block b-slider end-->
			<div class="content__info">
				<div class="content__left">

						<!--block panel-->
						<?php if (CFS()->get('price')!=''): ?>
							<? include('include/panel.php') ?>
						<?php endif ?>
						<!--block panel end-->

						<h1>Цены на наши услуги</h1>
						<?
							while (have_posts()) : the_post(); 
							printf('<p>%s</p> ',the_content());

						   endwhile; 
						   wp_reset_query(); 
						?>
						<table class="table_price stacktable large-only">
							<tbody>
								<tr>
									<td>
										<p>
											<strong>Вид оказываемых услуг</strong>
										</p>
									</td>
									<td>
										<p>
											<strong>Цена услуги</strong>
										</p>
									</td>
									<td>
										<p>
											<strong>Сроки исполнения</strong>
										</p>
									</td>
									<td>
										<p>
											<strong> Получить</strong>
										</p>
									</td>
								</tr>
								
									<?
										$post_not_view= array(51);
										$args = array(
										'cat'=> 2,
										'post__not_in'=>$post_not_view
										);
										query_posts($args);
										while (have_posts()) : the_post(); 
										printf('
											<tr>
												<td>
													<p>%s</p>
												</td>
												<td>
													<p>%s руб</p>
												</td>
												<td>
													<p>%s дня</p>
												</td>
												<td>
													<a href="%s" class="table__link">подбронее</a>
												</td>
											</tr>
										'
										 ,get_the_title()
										 ,CFS()->get('price')
										 ,CFS()->get('time')
									     ,get_permalink()
									     );
										 endwhile; 
										 wp_reset_query();
								 	?>
							</tbody>
						</table>
						<div class="star__reting">
							<? if(function_exists('the_ratings')) { the_ratings(); }// Выводим рейтинг ?>
						</div>

						<!--block b-news-->
						<? include('include/news.php') ?>
						<!--block b-news end-->
						
					</div>
					
					<!--block b-link-->
					<? include('include/links.php') ?>
					<!--block b-link end-->

				</div>
				<? include('include/right-part.php') ?>
			</div>
		</div>
	</div>
</div>
<!-- block section-contact-->
<? include('include/form.php') ?>




<?php get_footer(); ?>
