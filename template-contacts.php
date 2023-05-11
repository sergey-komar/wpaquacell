<?php
/**
 * Template Name: Контакты
 */
?>

<?php get_header('page');?>
<main class="main">
    <div class="contacts">
        <div class="container">
            <h1 class="contacts__title title">
                Контакты
            </h1>
            <p class="contacts__text">
                <span>Если у вас есть вопросы, нужна консультация инженера 
                    или специалиста по подбору корпуса,</span> свяжитесь с снами 
                или задайте свой вопрос через форму обратной связи
            </p>
            <div class="contacts__info">
                <a href="#" class="footer__center-contact footer__center-contact--address contacts__address">
                <?php the_field('kontakty_adres');?>
                </a>
                <a href="<?php the_field('kontakty_ssylka_pochta');?>" class="footer__center-contact footer__center-contact--email contacts__email">
                <?php the_field('kontakty_pochta');?>
                </a>
                <a href="<?php the_field('kontakty_ssylka_pochta');?>" class="footer__center-contact footer__center-contact--phone contacts__phone">
                <?php the_field('kontakty_telefon');?>
                </a>
            </div>

            <div class="services-form">
                <div class="container">
                    <div class="services-form__block">
                        <div class="services-form__block-title title">
                            У Вас <span>есть вопросы?</span> Напишите нам
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
        </div>
    </div>
</main>
<?php get_footer();?>