<?php get_header(); ?>

<div class="main-cont">
    <div class="main-wrap">
        <? include 'include/left-col.php'; ?>
        <div class="content-item">
            <div class="bread-crambs-wrap">
                <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(); ?>
            </div>
            <? if (have_posts()) : ?>
                <h1><? printf(__('Результаты поиска: %s'), '<span>' . get_search_query() . '</span>'); ?></h1>
                <ol class="find">
                    <? while (have_posts()) : the_post(); ?>
                        <li><a href="<? the_permalink() ?>" rel="bookmark"
                               title="<? the_title_attribute() ?>"><? the_title() ?></a>
                            <p><? echo(get_the_excerpt()) ?></p></li>
                    <? endwhile; ?>
                </ol>
            <? else : ?>
                <h1>Ничего не найдено</h1>
                <p>Ничего не найдено, попробуйте еще раз.</p>
                <br/>
                <? get_search_form(); ?>
            <? endif; ?>
        </div>
    </div>
</div>
<!--section sheme-->


<!--Form Order-->
<? include 'include/form.php'; ?>
<!--Form Order-->


<?php get_footer(); ?>
