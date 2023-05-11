<?php
/**
 * Template Name: Услуги
 */
?>
<?php get_header('page');?>
<main class="main">
    <div class="services">
        <div class="container">
            <h1 class="services__title title">Услуги</h1>
            <div class="tabs">
                <div class="tabs__item">
                <?php if(have_rows('nazvanie_uslugi')): while(have_rows('nazvanie_uslugi')) : the_row()?>
                    <button class="tabs__item-btn">
                       <?php the_sub_field('tekst_nazvaniya_uslugi')?>
                    </button>
                <?php endwhile; endif;?>
                </div>

                <?php if(have_rows('usluga')) : while(have_rows('usluga')) : the_row()?>
                <div class="tabs__content">
                    <div class="tabs__content-title">
                       <?php the_sub_field('zagolovok_uslugi')?>
                    </div>
                    <?php if(have_rows('tekst_uslugi')) : while(have_rows('tekst_uslugi')) : the_row()?>
                    <p class="tabs__content-text">
                    <?php the_sub_field('opisanie_uslugi')?>
                    </p>
                    <?php endwhile; endif;?>
                </div>
                <?php endwhile; endif;?>
             
            </div>
        </div>
    </div>

    <div class="services-analysis">
        <div class="container">
            <div class="services-analysis__block">
            <?php if(have_rows('tekstovyj_blok_uslug')) : while(have_rows('tekstovyj_blok_uslug')) : the_row()?>
                <p class="services-analysis__block-text">
                <?php the_sub_field('tekst_vnutri_tekstovogo_bloka_uslug')?>
                </p>
            <?php endwhile; endif;?>
              
            </div>
        </div>
    </div>
 
    <div class="services-industries">
        <div class="container">
            <h3 class="services-industries-title title">
                Отрасли <span>в которых мы работаем</span>
            </h3>
            <div class="services-industries__block">
                <div class="services-industries__item">
                    <div class="services-industries__item-img">
                        <img src="<?php echo get_template_directory_uri();?>./assets/images/industries/industries-1.png" alt="img">
                    </div>
                    <p class="services-industries__item-text">
                        Водоподготовка для ЖКХ
                    </p>
                </div>
                <div class="services-industries__item">
                    <div class="services-industries__item-img">
                        <img src="<?php echo get_template_directory_uri();?>./assets/images/industries/industries-2.png" alt="img">
                    </div>
                    <p class="services-industries__item-text">
                        Водоподготовка для пищевого производства
                    </p>
                </div>
                <div class="services-industries__item">
                    <div class="services-industries__item-img">
                        <img src="<?php echo get_template_directory_uri();?>./assets/images/industries/industries-3.png" alt="img">
                    </div>
                    <p class="services-industries__item-text">
                        Котельные, тепловые пункты объекты
                    </p>
                </div>
                <div class="services-industries__item">
                    <div class="services-industries__item-img">
                        <img src="<?php echo get_template_directory_uri();?>./assets/images/industries/industries-4.png" alt="img">
                    </div>
                    <p class="services-industries__item-text">
                        Сельское хозяйство
                    </p>
                </div>
                <div class="services-industries__item">
                    <div class="services-industries__item-img">
                        <img src="<?php echo get_template_directory_uri();?>./assets/images/industries/industries-5.png" alt="img">
                    </div>
                    <p class="services-industries__item-text">
                        Нефте-газовый сектор
                    </p>
                </div>
                <div class="services-industries__item">
                    <div class="services-industries__item-img">
                        <img src="<?php echo get_template_directory_uri();?>./assets/images/industries/industries-6.png" alt="img">
                    </div>
                    <p class="services-industries__item-text">
                        Микроэлектроника и химическое производство
                    </p>
                </div>
                <div class="services-industries__item">
                    <div class="services-industries__item-img">
                        <img src="<?php echo get_template_directory_uri();?>./assets/images/industries/industries-7.png" alt="img">
                    </div>
                    <p class="services-industries__item-text">
                        Линии разлива бутилированной воды
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="services-form">
        <div class="container">
            <div class="services-form__block">
                <div class="services-form__block-title title">
                    Вам нужна<span>помощь с подбором?</span>
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
    </div> 
</main>
<?php get_footer();?>