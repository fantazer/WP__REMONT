<?get_header();?>
<div class="baner">
	<div style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/8.jpg')" class="baner-el">
		<div class="main-cont">
			<div class="baner-el-content">
				<div class="baner-el__title">Наши
					<br> преимущества</div>
				<div class="baner-el__text-wrap">
					<div class="baner-el__text">Бесплатная диагностика  </div>
					<div class="baner-el__text">Бесплатный вызов мастера</div>
					<div class="baner-el__text">Гарантия 1 год</div>
					<div class="baner-el__text">9 лет на рынке Санкт-Петербурга</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-wrap">
	<div class="content">
		<div class="section section-trust">
			<div class="main-cont">
				<div class="section-titile">Почему нам можно доверять</div>
				<div class="section-titile-sub">Сотрудничать с нами удобно и выгодно. Мы думаем о Вас и Вашей технике.</div>
				<div class="section-trust-wrap">
					<div class="section-trust-el">
						<div class="section-trust-el-icon">
							<svg class="icon">
								<use xlink:href="#icon-man"></use>
							</svg>
						</div>
						<div class="section-trust-el-title">Опытные и надежные сотрудники</div>
						<!--.section-trust-el-text  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi accusamus adipisci nobis vel optio, illo suscipit rerum, odit odio quia.-->
					</div>
					<div class="section-trust-el">
						<div class="section-trust-el-icon">
							<svg class="icon">
								<use xlink:href="#icon-fix"></use>
							</svg>
						</div>
						<div class="section-trust-el-title">Быстрый ремонт техники </div>
					</div>
					<div class="section-trust-el">
						<div class="section-trust-el-icon">
							<svg class="icon">
								<use xlink:href="#icon-true"></use>
							</svg>
						</div>
						<div class="section-trust-el-title">Только качественные комплектующие </div>
					</div>
				</div>
			</div>
		</div>
		<!--section price-->
		<div class="section section-price">
			<div style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-1.jpg')" class="section-price-img"></div>
			<div class="section-price-cont">
				<div class="section-price-title">У нас приемлимые цены</div>
				<div class="section-price-title-sub">Стоимость ремонта компьютера</div>
				<div class="section-price-val">от 800 руб</div>
				<div class="section-price-text"> Мы быстро вернем ваш ПК в рабочее состояние</div>
				<a href="#" class="section-price-get"> Заказать ремонт</a>
			</div>
		</div>
		<!--section sheme-->
		<div class="section section-sheme">
			<div class="section-titile">Схема нашей работы</div>
			<div class="section-titile-sub">Мы стараемся максимально быстро востановить вашу технику</div>
			<div class="main-cont">
				<div class="section-sheme-cont">
					<div class="section-sheme-step section-sheme-step--left">
						<div class="section-sheme-el">
							<div class="section-sheme-icon">
								<svg class="icon">
									<use xlink:href="#icon-order"></use>
								</svg>
							</div>
							<div class="section-sheme-title">
								<span>1.</span> Заявка по телефону или онлайн</div>
							<!-- <div class="section-sheme-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, cum nostrum magnam aspernatur minima?</div> -->
						</div>
						<div class="section-sheme-el">
							<div class="section-sheme-icon">
								<svg class="icon">
									<use xlink:href="#icon-spec"></use>
								</svg>
							</div>
							<div class="section-sheme-title">
								<span>2.</span> Консультация, оформление заявки</div>
							<!-- <div class="section-sheme-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor corporis dolore doloribus sequi perferendis.</div> -->
						</div>
					</div>
					<div class="section-sheme-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt="" />
					</div>
					<div class="section-sheme-step section-sheme-step--right">
						<div class="section-sheme-el">
							<div class="section-sheme-icon">
								<svg class="icon">
									<use xlink:href="#icon-diag"></use>
								</svg>
							</div>
							<div class="section-sheme-title">
								<span>3.</span> Диагностика техники, согласование работ</div>
						<!-- 	<div class="section-sheme-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dolore facere, maxime officia repudiandae?</div> -->
						</div>
						<div class="section-sheme-el">
							<div class="section-sheme-icon">
								<svg class="icon">
									<use xlink:href="#icon-garant"></use>
								</svg>
							</div>
							<div class="section-sheme-title">
								<span>4.</span> Оформление гарантийного талона</div>
							<!-- <div class="section-sheme-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime illo velit excepturi laudantium, architecto.</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--section sheme-->
		
		
		<!--Form Order-->
			<? include 'include/form.php';?>
		<!--Form Order-->
		
	</div>
</div>
<?get_footer();?>