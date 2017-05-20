<!--block footer-->
		<div class="footer">
			<!-- mobile-menu -->	
			<?  include 'include/mobile-menu.php';?>
			<!-- mobile-menu -->	
			<div class="main-cont">
				<div class="footer-cont">
					<div class="footer-link">
						 <?
							$args = array(
							'cat'=> 7,
							'orderby' => 'date', 
							'order' => 'ASC',
							 'posts_per_page' => 3
							);
						?>
						<? query_posts($args);?>
						<? while (have_posts()) : the_post(); ?>
							<a href="<?=get_permalink(); ?>" class="footer-link-el"> <?=get_the_title(); ?></a>
						<? endwhile; ?> 
						<? wp_reset_query();?> 
					</div>
					<div class="footer-contact">
						<a href="/" class="footer-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="" />
						</a>
						<div class="footer-phone">
							<a href="tel:8(495)432-23-23"><?=get_field('phone', 'option');?></a>
						</div>
						<div class="footer-mail">
							<a href="mailto:mail@mail.com"><?=get_field('mail', 'option');?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--block footer end-->
		<!--modal-->
			<div class="modal modal-true">
				<div class="modal-wrap">
					<svg class="icon">
						<use xlink:href="#interface"></use>
					</svg>
					<div class="modal-true-text">Ваша заявка принята</div>
				</div>
			</div>
		</div>
		<script src="<?php echo get_template_directory_uri(); ?>/js/combined.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/script-edit.js"></script>

 <?php wp_footer(); ?>
   <script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>

   <!-- Yandex.Metrika counter -->
   <script type="text/javascript">
       (function (d, w, c) {
           (w[c] = w[c] || []).push(function() {
               try {
                   w.yaCounter44474845 = new Ya.Metrika({
                       id:44474845,
                       clickmap:true,
                       trackLinks:true,
                       accurateTrackBounce:true
                   });
               } catch(e) { }
           });

           var n = d.getElementsByTagName("script")[0],
               s = d.createElement("script"),
               f = function () { n.parentNode.insertBefore(s, n); };
           s.type = "text/javascript";
           s.async = true;
           s.src = "https://mc.yandex.ru/metrika/watch.js";

           if (w.opera == "[object Opera]") {
               d.addEventListener("DOMContentLoaded", f, false);
           } else { f(); }
       })(document, window, "yandex_metrika_callbacks");
   </script>
   <noscript><div><img src="https://mc.yandex.ru/watch/44474845" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
   <!-- /Yandex.Metrika counter -->


 </body>
</html>

