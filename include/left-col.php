<div class="left-col">

    <!-- get-order-small -->
    <? include 'order-small.php'; ?>
    <!-- get-order-small -->

    <div class="sale-baner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/sale.jpg" alt="">
    </div>

    <div class="left-col__title">Популярные услуги</div>

    <!-- popular service -->
    <div class="popular-service">
        <?
        $args = array(
            'orderby' => 'date',
            'order' => 'ASC',
            'tag' => 'popular',
            'posts_per_page' => 7
        );
        ?>
        <? query_posts($args); ?>
        <? while (have_posts()) : the_post(); ?>
            <a href="<?= get_permalink(); ?>" class="popular-service__el"><?= get_the_title(); ?></a>
        <? endwhile; ?>
        <? wp_reset_query(); ?>
    </div>
    <!-- popular service -->

    <!-- news -->

    <div class="left-col__title">Наши новости</div>
    <div class="get-news">
        <?
        $args = array(
            'orderby' => 'id',
            'order' => 'DESC',
            'cat' => 9,
            'posts_per_page' => 5
        );
        ?>
        <? query_posts($args); ?>
        <? while (have_posts()) : the_post(); ?>
            <a href="<?= get_permalink(); ?>" class="get-news__el">
                <div class="get-news__content">
                    <div class="get-news__title"><?= get_the_title(); ?></div>
                    <div class="get-news__text"><?= wp_trim_words(get_the_content(), 20, ' ...') ?></div>
                </div>
            </a>
        <? endwhile; ?>
        <? wp_reset_query(); ?>
    </div>

</div>