<?php
/**
 * Template Name: Системы водоочистки
 */
?>
<?php get_header('page');?>
<main class="main">
    <div class="services">
        <div class="container">
            <h1 class="services__title title">Технологии водоочистки</h1>
            <div class="tabs">

                <div class="tabs__item">
                <?php if(have_rows('tehnologii_vodoochistki')) : while(have_rows('tehnologii_vodoochistki')) : the_row()?>
                    <button class="tabs__item-btn">
                        <?php the_sub_field('tehnologii_vodoochistki_knopka')?>
                    </button>
                <?php endwhile; endif;?>  
                </div>

                
                <?php if(have_rows('opisanie_tehnologii')) : while(have_rows('opisanie_tehnologii')) : the_row()?>
                <div class="tabs__content">
                    <div class="tabs__content-title">
                        <?php the_sub_field('opisanie_tehnologii_zagolovok')?>
                    </div>
                    <?php if(have_rows('opisanie_tehnologii_oblast_teksta')) : while(have_rows('opisanie_tehnologii_oblast_teksta')) : the_row()?>
                    <p class="tabs__content-text">
                        <?php the_sub_field('opisanie_tehnologii_tekst')?>
                    </p>
                    <?php endwhile; endif;?>  
                </div>
                <?php endwhile; endif;?>  

               
            </div>
        </div>
    </div>

    <div class="areas">
        <div class="container">
            <div class="areas__title title">
                Области применения
            </div>
            <div class="areas__block">
                <div class="areas__item">
                    <div class="areas__item-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/technology/areas-1.png" alt="img">
                    </div>
                    <p class="areas__item-text">
                        Водоподготовка для ЖКХ
                    </p>
                </div>

                <div class="areas__item">
                    <div class="areas__item-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/technology/areas-2.png" alt="img">
                    </div>
                    <p class="areas__item-text">
                        Водоподготовка для пищевого производства
                    </p>
                </div>

                <div class="areas__item">
                    <div class="areas__item-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/technology/areas-3.png" alt="img">
                    </div>
                    <p class="areas__item-text">
                        Котельные, тепловые пункты объекты энергетики
                    </p>
                </div>

                <div class="areas__item">
                    <div class="areas__item-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/technology/areas-4.png" alt="img">
                    </div>
                    <p class="areas__item-text">
                        Сельское хозяйство
                    </p>
                </div>
            </div>

            <div class="areas-table">
            <?php if(have_rows('tablicza')) : while(have_rows('tablicza')) : the_row()?>
                <div class="areas-table__item">
                    <div class="areas-table__item-title">
                    <?php the_sub_field('nazvanie_punkta')?>
                    </div>

                    <?php if(have_rows('tablicza_harakteristiki')) : while(have_rows('tablicza_harakteristiki')) : the_row()?>
                    <div class="areas-table__item-title">
                        <?php the_sub_field('harakteristiki_punkta')?>  
                    </div>
                    <?php endwhile; endif;?>  
                   
                    
                </div>
            <?php endwhile; endif;?>  
            </div>


            <div class="designers-top__box">
            <?php if(have_rows('sertifikat_tehnologii')) : while(have_rows('sertifikat_tehnologii')) : the_row()?>
                <a href="<?php the_sub_field('sertifikat_tehnologii_fajl')?>  " class="designers-top__item designers-top__item-technology">
                    <div class="designers-top__item-title designers-top__item-title-technology">
                    <?php the_sub_field('sertifikat_tehnologii_zagolovok')?>  
                    </div>
                </a>
            <?php endwhile; endif;?>   
            </div>

            <h2 class="areas__subtitle title">
                Для заказа оборудовавания <span>свяжитесь с нами</span>
            </h2>

            <div class="footer__center footer__center-technology">
                <a href="#" class="footer__center-contact footer__center-contact--address contacts__address">
                <?php the_field('sistemy_vodoochistki_adres');?>
                </a>
                <a href="<?php the_field('sistemy_vodoochistki_pochta_ssylka');?>" class="footer__center-contact footer__center-contact--email contacts__email">
                <?php the_field('sistemy_vodoochistki_pochta_tekst');?>
                </a>
                <a href="<?php the_field('sistemy_vodoochistki_telefon_ssylka');?>" class="footer__center-contact footer__center-contact--phone contacts__phone">
                <?php the_field('sistemy_vodoochistki_telefon_tekst');?>
                </a>
            </div>

            <a href="<?php the_field('oprosnyj_list_fajl');?>" class="areas__btn" target="_blank">заполнить опросный лист</a>
        </div>
    </div>

    <div class="services-form">
        <div class="container">
            <div class="services-form__block">
                <div class="services-form__block-title title">
                    Вам нужна <span>помощь с подбором?</span>
                </div>
                <p class="services-form__block-text">
                   <span>Заполните форму</span> и инженер свяжется 
                   с вами и поможет подобрать оборудование
                </p>

                <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="70" title="Общая форма"]')?>  
                </div>
            </div>
        </div>
    </div> 
</main>
<?php get_footer();?>