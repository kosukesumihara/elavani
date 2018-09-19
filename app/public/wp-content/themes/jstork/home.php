<?php get_header(); ?>
<div id="home-bigbanner" class="ratio-1_1">
    <div class="home-bigbanner--inner ratio-1_1--inner">
        <a href="">
            <div class="home-bigbanner--textarea">
                <p class="readtitele__text">
                    <span>"働く"を豊かに</span>"自分が生み出したモノで誰かが幸せな時間を過ごしてほしい"
                </p>
                <h2 class="title__text">
                    自分らしい、生き方。楽しみ方。<br>
                    質の高いスタンダード ライフスタイルを。
                </h2>
                <span class="decration-border"></span>
                <p class="name__text">
                    斎藤 十和子
                </p>
            </div>
            <?php the_image('top-img@2x.jpg', 'profile', 'グリニッチproduceエラヴァニ',1440 ,665 ); ?>
        </a>
    </div>
</div>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all t-all d-5of7 cf" role="main">

            <?php get_template_part( 'parts_add_top' ); ?>

            <?php
	$toplayout = get_option('opencage_toppage_archivelayout');
	$toplayoutsp = get_option('opencage_toppage_sp_archivelayout');
?>
                <?php if (is_mobile()) :?>
                <?php if ( $toplayoutsp == "toplayout-big" ) : ?>
                <?php get_template_part( 'parts_archive_big' ); ?>
                <?php elseif ( $toplayoutsp == 'toplayout-card' ) : ?>
                <?php get_template_part( 'parts_archive_card' ); ?>
                <?php elseif ( $toplayoutsp == 'toplayout-magazine' ) : ?>
                <?php get_template_part( 'parts_archive_magazine' ); ?>
                <?php else : ?>
                <?php get_template_part( 'parts_archive_simple' ); ?>
                <?php endif;?>
                <?php else : ?>
                <?php if ( $toplayout == "toplayout-big" ) : ?>
                <?php get_template_part( 'parts_archive_big' ); ?>
                <?php elseif ( $toplayout == 'toplayout-card' ) : ?>
                <?php get_template_part( 'parts_archive_card' ); ?>
                <?php elseif ( $toplayout == 'toplayout-magazine' ) : ?>
                <?php get_template_part( 'parts_archive_magazine' ); ?>
                <?php else : ?>
                <?php get_template_part( 'parts_archive_simple' ); ?>
                <?php endif;?>
                <?php endif;?>

                <?php pagination(); ?>
                <?php get_template_part( 'parts_add_bottom' ); ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>