<?
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<div class="content">
	<div class="main-cont">
			<!--block b-slider-->
			<? include('include/main-slider.php') ?>
			<!--block b-slider end-->
		</div>
</div>
<!-- block section-contact-->
<? include('include/form.php') ?>

<div class="main-cont">
	<!--block b-news-->
	<? include('include/news.php') ?>
	<!--block b-news end-->
	<!--block b-link-->
	<? include('include/links.php') ?>
	<!--block b-link end-->
</div>
<?php get_footer(); ?>
