	<nav id="my-menu">
		<ul>
	<?php if ($menu_items = wp_get_nav_menu_items('main')): ?>
					<?php foreach ((array) $menu_items as $key => $menu_item ): ?>
						<?php if($menu_item->object_id=='13'): ?>
							<li>
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
								<ul>
									 <?
										$args = array(
										'cat'=> 2,
										'orderby' => 'date', 
										'order' => 'ASC'
										);
									?>
									<? query_posts($args);?>
									<? while (have_posts()) : the_post(); ?>
											<li>
												<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
											</li>
									<? endwhile; ?> 
									<? wp_reset_query();?> 
								</ul>
							</li>

						<?php elseif($menu_item->object_id=='36'): ?>
							<li>
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
								<ul>
									 <?
										$args = array(
										'cat'=> 6,
										'orderby' => 'date', 
										'order' => 'ASC'
										);
									?>
									<? query_posts($args);?>
									<? while (have_posts()) : the_post(); ?>
											<li>
												<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
											</li>
									<? endwhile; ?> 
									<? wp_reset_query();?> 
								</ul>
							</li>

						<?php elseif($menu_item->object_id=='15'): ?>
							<li>
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
								<ul>
									 <?
										$args = array(
										'cat'=> 3,
										'orderby' => 'date', 
										'order' => 'ASC'
										);
									?>
									<? query_posts($args);?>
									<? while (have_posts()) : the_post(); ?>
											<li>
												<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
											</li>
									<? endwhile; ?> 
									<? wp_reset_query();?> 
								</ul>
							</li>

						<?php elseif($menu_item->object_id=='16'): ?>
							<li>
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
								<ul>
									 <?
										$args = array(
										'cat'=> 4,
										'orderby' => 'date', 
										'order' => 'ASC'
										);
									?>
									<? query_posts($args);?>
									<? while (have_posts()) : the_post(); ?>
											<li>
												<a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
											</li>
									<? endwhile; ?> 
									<? wp_reset_query();?> 
								</ul>
							</li>
						<?php else: ?>
							<li>
								<a href="<? echo $menu_item->url; ?>"><? echo $menu_item->title; ?> </a>
							</li>
						<?php endif ?>

					<?php endforeach ?>
			<?php endif ?>
	</ul>
</nav>