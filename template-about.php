<?php
/**
 * Template Name: О компании
 */
?>

<?php get_header('page');?>
<main class="main">
    <div class="about">
        <div class="container">
            <div class="about__block">
                <div class="about__contact">
                    <h1 class="about__contact-title title">О компании</h1>
                    <?php if(have_rows('tekst_opisaniya_kompanii')) : while(have_rows('tekst_opisaniya_kompanii')) : the_row()?>
                    <p class="about__contact-text">
                      <?php the_sub_field('vyvod_teksta_opisaniya_kompanii')?>
                    </p>
                    <?php endwhile; endif;?>
                   
                </div>
                <?php
                    $image = "background-image: url('./images/about/about.jpg')";
                  
                ?>
       
                 <div class="about__img" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/about/about.jpg');"> 
                    <div class="about__inner">
                <?php if(have_rows('czifry_kompanii')) : while(have_rows('czifry_kompanii')) : the_row()?>
                        <div class="about__wrapper">
                            <div class="about__img-title">
                            <?php the_sub_field('czifry_kompanii_nomer')?>
                            </div>
                            <p class="about__img-text">
                            <?php the_sub_field('czifry_kompanii_tekst')?>
                            </p>
                        </div>
                <?php endwhile; endif;?>       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="mission">
        <div class="container">
            <div class="mission__block">
                <div class="mission__content">
                    <h2 class="mission__content-title">Наша миссия</h2>
                    <?php if(have_rows('nasha_missiya')) : while(have_rows('nasha_missiya')) : the_row()?>
                    <div class="mission__item">
                        <div class="mission__item-img">
                            <img src=" <?php the_sub_field('nasha_missiya_ikonka')?>" alt="img">
                        </div>
                        <p class="mission__item-text">
                        <?php the_sub_field('nasha_missiya_tekst')?>
                        </p>
                    </div>
                    <?php endwhile; endif;?>      
                   
                </div>
                <div class="mission__img">
                    <img src="<?php echo get_template_directory_uri();?>./assets/images/about/about-girl.png" alt="img">
                </div>
            </div>
        </div>
    </div>

    <div class="sertificate">
        <div class="container">
            <h3 class="sertificate__title">Сертификаты</h3>
            <div class="sertificate__block">
            <?php if(have_rows('sertifikaty')) : while(have_rows('sertifikaty')) : the_row()?>
                <div class="sertificate__img">
                    <img src="<?php the_sub_field('sertifikaty_izobrazhenie')?>" alt="img">
                </div>
            <?php endwhile; endif;?>      
               
            </div>
        </div>
    </div> 
</main>
<?php get_footer();?>