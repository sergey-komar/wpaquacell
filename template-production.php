<?php
/**
 * Template Name: Производство корпусов
 */
?>
<?php get_header('page');?>
<main class="main">
    <section class="production">
        <div class="container">
            <h1 class="production__title title">
                Производство <span>напорных корпусов</span>
            </h1>
            <a href="#" class="production-video__link production-video__link--mobile">
                <div class="container">
                    <img src="<?php echo  get_template_directory_uri()?>/assets/images/production/production-video.png" alt="img">
                </div>
            </a>
            <div class="production__block">
                <div class="production__info">
                <?php if(have_rows('proizvodstvo_tekstovoe_pole')) : while(have_rows('proizvodstvo_tekstovoe_pole')) : the_row()?>
                   <p class="production__info-text">
                   <?php the_sub_field('proizvodstvo_tekst')?>
                   </p>
                <?php endwhile; endif;?>
                </div>
               
                <div class="production__img">
                <img src="<?php the_field('proizvodstvo_izobrazhenie')?>" alt="img"> 
                </div>
            </div>
        </div>

        <a href="<?php the_field('proizvodstvo_video')?>" target="_blank" class="production-video__link">
            <div class="container">
                <img src="<?php echo  get_template_directory_uri()?>/assets/images/production/production-video.png" alt="img">
            </div>
        </a>
        
        <div class="container">
            <div class="production-video">
                <div class="production-video__title title">
                    <span>На территории 1200 кв.м были</span> организованы следующие участки:
                </div>
                <div class="production-video__block">
                <?php if(have_rows('proizvodstvo_territorii')) : while(have_rows('proizvodstvo_territorii')) : the_row()?>
                    <div class="production-video__item">
                        <div class="production-video__item-num">
                        <?php the_sub_field('proizvodstvo_territorii_nomer')?>
                        </div>
                        <p class="production-video__item-text">
                        <?php the_sub_field('proizvodstvo_territorii_tekst')?>
                        </p>
                    </div>
                <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>