<?php
/**
 * Template Name: Монтаж и сервис
 */
?>
<?php get_header('page');?>
<main class="main">
    <section class="instalation">
        <div class="container">
            <h1 class="instalation__title title">Монтаж и сервис</h1>
       
            <div class="instalation-block">

            <?php if(have_rows('etapy')) : while(have_rows('etapy')) : the_row()?>
                <div class="instalation-block__item">
                    <div class="instalation-block__content">
                        <div class="instalation-block__item-subtitle">
                        <?php the_sub_field('zagolovok_etapa')?>
                        </div>
                        <div class="instalation-block__item-title">
                        <?php the_sub_field('podzagolovok_etapa')?>
                        </div>
                        <ul class="instalation-block__list">
                            
                            <?php if(have_rows('spisok_etapa')) : while(have_rows('spisok_etapa')) : the_row()?>
                            <li class="instalation-block__list-item">
                            <?php the_sub_field('punkt_spiska_etapa')?>
                            </li>
                            <?php endwhile; endif;?>
                        </ul>
                        <p class="instalation-block__item-text">
                        <?php the_sub_field('tekst_etapa')?>
                        </p>
                    </div>

                    <div class="instalation-block__img">
                        <img src="<?php the_sub_field('kartinka_etapa')?>" alt="img">
                    </div>
                </div>
            <?php endwhile; endif;?>
            </div>
        </div>

        <div class="instalation-container">
            <div class="container">
                <div class="instalation-container__block">
                <?php if(have_rows('montazh_i_servis_tekstovoe_pole')) : while(have_rows('montazh_i_servis_tekstovoe_pole')) : the_row()?>
                    <p class="instalation-container__block-text">
                    <?php the_sub_field('montazh_i_servis_tekst')?>
                    </p>
                <?php endwhile; endif;?>
                </div>
            </div>
        </div>

        <div class="instalation-box">
            <div class="container">
                <div class="instalation-box__inner">
                    <div class="instalation-box__item">
                        <div class="instalation-box__item-img">
                            <img src="<?php echo  get_template_directory_uri()?>/assets/images/instalation/instalation-icon-1.png" alt="img">
                        </div>
                        <p class="instalation-box__item-text">
                            Техническая поддержка 24/7
                        </p>
                    </div>
    
                    <div class="instalation-box__item">
                        <div class="instalation-box__item-img">
                            <img src="<?php echo  get_template_directory_uri()?>/assets/images/instalation/instalation-icon-2.png" alt="img">
                        </div>
                        <p class="instalation-box__item-text">
                            Сертифици­рованные специалисты
                        </p>
                    </div>
    
                    <div class="instalation-box__item">
                        <div class="instalation-box__item-img">
                            <img src="<?php echo  get_template_directory_uri()?>/assets/images/instalation/instalation-icon-3.png" alt="img">
                        </div>
                        <p class="instalation-box__item-text">
                              Оплата после монтажа
                        </p>
                    </div>
    
                    <div class="instalation-box__item">
                        <div class="instalation-box__item-img">
                            <img src="<?php echo  get_template_directory_uri()?>/assets/images/instalation/instalation-icon-4.png" alt="img">
                        </div>
                        <p class="instalation-box__item-text">
                            Гарантий­ный срок до 5 лет
                        </p>
                    </div>
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