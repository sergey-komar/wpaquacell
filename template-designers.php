<?php
/**
 * Template Name: Для проектировщиков
 */
?>
<?php get_header('page');?>
<main class="main">
    <section class="designers">
        <div class="container">
            <div class="designers-top">
                <div class="designers-top__block">
                    <div class="designers-top__content">
                        <h1 class="designers-top__content-title title">Проектировщикам</h1>
                        <?php if(have_rows('oblast_zagolovka_dlya_proektirovshhikov')) : while(have_rows('oblast_zagolovka_dlya_proektirovshhikov')) : the_row();?>
                        <div class="designers-top__content-subtitle">
                           <?php the_sub_field('zagolovok_dlya_proektirovshhikov');?>
                        </div>
                        <?php endwhile; endif?>

                        <?php if(have_rows('oblast_teksta_dlya_proektirovshhikov')) : while(have_rows('oblast_teksta_dlya_proektirovshhikov')) : the_row();?>
                        <p class="designers-top__content-text">
                            <?php the_sub_field('tekst_dlya_proektirovshhikov');?>
                        </p>
                        <?php endwhile; endif?>
                    </div>
                    <div class="designers-top__img">
                        <img src="<?php echo  get_template_directory_uri();?>/assets/images/designers/Adjustment.png" alt="img">
                    </div>
                </div>
               
                <div class="designers-top__box">
                <?php if(have_rows('snip_dlya_proektirovshhikov')) : while(have_rows('snip_dlya_proektirovshhikov')) : the_row();?>
                    <a href="<?php the_sub_field('snip_dlya_proektirovshhikov_ssylka');?>" class="designers-top__item" target="_blank">
                        <div class="designers-top__item-title">
                            <?php the_sub_field('snip_dlya_proektirovshhikov_zagolovok');?>
                        </div>
                        <div class="designers-top__item-subtitle">
                            <?php the_sub_field('snip_dlya_proektirovshhikov_tekst');?>
                        </div>
                    </a>
                <?php endwhile; endif?>
                </div>
            </div>
        </div>

             <div class="designers-center">
                <div class="container">
                    <div class="designers-center__sistem">
                        <div class="designers-center__content">
                            <div class="designers-center__content-title title">
                                Системы водоочистки: <span>проектирование и расчет</span>
                            </div>
                            <p class="designers-center__content-text">
                                <?php the_field('sistema_vodoochistki_tekst');?>
                            </p>
                        </div>
                        <div class="designers-center__img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/designers/designers-house.png" alt="">
                        </div>
                    </div>

                    <div class="designers-center__box">
                        <div class="designers-center__item">
                            <div class="designers-center__item-title">
                                Для частных домов и коттеджей.
                            </div>
                            <p class="designers-center__item-text">
                               <?php the_field('sistemy_vodoochistki_dlya_chastnyh_domov');?>
                            </p>
                        </div>
                        <div class="designers-center__item">
                            <div class="designers-center__item-title">Для промышленных объектов.
                                </div>
                            <p class="designers-center__item-text">
                            <?php the_field('sistemy_vodoochistki_dlya_promyshlennyh_obektov');?>
                            </p>
                        </div>
                    </div>

                    <div class="designers-center__block">
                        <div class="designers-center__filter">
                            <div class="designers-center__filter-item">
                                <div class="designers-center__filter-item-title">
                                    Промышленная фильтрация
                                </div>
                                <p class="designers-center__filter-item-text">
                            <?php the_field('sistemy_vodoochistki_promyshlennaya_filtracziya');?>
                                </p>
                            </div>
                            <div class="designers-center__filter-item">
                                <div class="designers-center__filter-item-title">
                                    Проектирование станций очистки воды. 
                                </div>
                                <p class="designers-center__filter-item-text">
                                <?php the_field('sistemy_vodoochistki_proektirovanie_stanczij');?>
                                </p>
                            </div>
                        </div>
                        <div class="designers-center__block-img">
                            <img src="<?php echo  get_template_directory_uri();?>/assets/images/designers/designers-prom.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="designers-bottom">
                <div class="container">
                    <div class="designers-bottom__title title">
                        Взаимодействие <span>в три этапа</span>
                    </div>
                    <div class="designers-bottom__block">

                    <?php if(have_rows('proektirovshhikam_etapy')) : while(have_rows('proektirovshhikam_etapy')) : the_row();?>
                        <div class="designers-bottom__item">
                            <div class="designers-bottom__content">
                                <div class="designers-bottom__content-subtitle">
                                <?php the_sub_field('proektirovshhikam_etapy_zagolovok');?>
                                </div>
                                <div class="designers-bottom__content-title">
                                <?php the_sub_field('proektirovshhikam_etapy_podzagolovok');?>
                                </div>

                                <?php if(have_rows('proektirovshhikam_etapy_oblast_teksta')) : while(have_rows('proektirovshhikam_etapy_oblast_teksta')) : the_row();?>
                                <p class="designers-bottom__content-text">
                                <?php the_sub_field('proektirovshhikam_etapy_tekst');?>
                                </p>
                                <?php endwhile; endif?>
                              
                            </div>
                            <div class="designers-bottom__img">
                                <img src=" <?php the_sub_field('proektirovshhikam_etapy_kartinka');?>" alt="img">
                            </div>
                        </div>
                    <?php endwhile; endif?>
                       
                    </div>
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
        
                        <div  class="form">
                        <?php echo do_shortcode('[contact-form-7 id="70" title="Общая форма"]')?> 
                        </div>
                    </div>
                </div>
            </div>  
    </section>
</main>
<?php get_footer();?>