<?
	if (get_field('link-category')!="") {
		$linkCategory = (get_field('link-category'));
		$current_cat = $linkCategory[0];
		//echo $current_cat;
	 } 

?> 
<?php if ($current_cat): ?>
						<div class="links-content">
						<div class="wrap-links-get">Метро
								<svg class="icon">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use>
								</svg>
						</div>
							<div class="block-links">
								<div class="wrap-links">
										 <?
											$args = array(
											'cat'=> $current_cat,
											'posts_per_page' => 999,
											'orderby' => 'date', 
											'order' => 'DESC'
											);
										?>
										<? query_posts($args);?>
										<? while (have_posts()) : the_post(); ?>
											<?php if (strlen(get_field('metro')) > 1): ?>
												<a href="<?=get_permalink(); ?>">
														<?=get_field('metro');?> 
												</a>
											<?php endif ?>
										<? endwhile; ?> 
										<? wp_reset_query();?> 
								</div>
							</div>
						</div>

						<div class="links-content">
							<div class="wrap-links-get">Город
									<svg class="icon">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use>
									</svg>
							</div>
								<div class="block-links">
									<div class="wrap-links">
											 <?
												$args = array(
												'cat'=> $current_cat,
												'posts_per_page' => 999,
												
												);
											?>
											<? query_posts($args);?>
											<? while (have_posts()) : the_post(); ?>
													<?php if (strlen(get_field('town')) > 1): ?>
														<a href="<?=get_permalink(); ?>">
															<?=get_field('town');?> 
														</a>
													<?php endif ?>
											<? endwhile; ?> 
											<? wp_reset_query();?> 
									</div>
								</div>
						</div>

						<div class="links-content">
							<div class="wrap-links-get">Район
									<svg class="icon">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use>
									</svg>
							</div>
								<div class="block-links">
									<div class="wrap-links">
											 <?
												$args = array(
												'cat'=> $current_cat,
												'posts_per_page' => 999,
												
												);
											?>
											<? query_posts($args);?>
											<? while (have_posts()) : the_post(); ?>
													<?php if (strlen(get_field('area')) > 1): ?>
														<a href="<?=get_permalink(); ?>">
															<?=get_field('area');?> 
														</a>
													<?php endif ?>
											<? endwhile; ?> 
											<? wp_reset_query();?> 
									</div>
								</div>
						</div>

						<div class="links-content">
							<div class="wrap-links-get">Бренд
									<svg class="icon">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use>
									</svg>
							</div>
								<div class="block-links">
									<div class="wrap-links">
											 <?
												$args = array(
												'cat'=> $current_cat,
												'posts_per_page' => 999,
												
												);
											?>
											<? query_posts($args);?>
											<? while (have_posts()) : the_post(); ?>
													<?php if (strlen(get_field('type')) > 1): ?>
														<a href="<?=get_permalink(); ?>">
															<?=get_field('type');?> 
														</a>
													<?php endif ?>
											<? endwhile; ?> 
											<? wp_reset_query();?> 
									</div>
								</div>
						</div>

						<div class="links-content">
							<div class="wrap-links-get">Другие услуги 
									<svg class="icon">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use>
									</svg>
							</div>
								<div class="block-links">
									<div class="wrap-links">
											 <?
												$args = array(
												'cat'=> $current_cat,
												'posts_per_page' => 999,
											
												);
											?>
											<? query_posts($args);?>
											<? while (have_posts()) : the_post(); ?>
													<?php if (strlen(get_field('other_service')) > 1): ?>
														<a href="<?=get_permalink(); ?>">
															<?=get_field('other_service');?> 
														</a>
													<?php endif ?>
											<? endwhile; ?> 
											<? wp_reset_query();?> 
									</div>
								</div>
						</div>
				<?php endif ?>