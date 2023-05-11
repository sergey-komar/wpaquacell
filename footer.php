<?php
?>
 <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer__top">
          <div class="footer__wrapper">
            <div class="footer__top-title">Компания</div>
            <?php
            wp_nav_menu([
              'theme_location' => 'menu-footer-company',
              'container' => '',
              'menu_class' => 'footer__menu footer__menu--one'
            ])
            ?>
          </div>
       

          <ul class="footer__menu">
            <div class="footer__top-title">каталог корпусов</div>
            <li class="footer__menu-item">
              <a href="#" class="footer__menu-link"> Стеклопластиковые</a>
            </li>
            <li class="footer__menu-item">
              <a href="#" class="footer__menu-link"> Металлопластиковые</a>
            </li>
            <li class="footer__menu-item">
              <a href="#" class="footer__menu-link">Обратного омуса</a>
            </li>
          </ul>

          <ul class="footer__menu">
            <div class="footer__top-title">отрасли</div>
            <li class="footer__menu-item">
              <a href="#" class="footer__menu-link"> Пищевое производство</a>
            </li>
            <li class="footer__menu-item">
              <a href="#" class="footer__menu-link"> ЖКХ</a>
            </li>
            <li class="footer__menu-item">
              <a href="#" class="footer__menu-link"> Конлы, тепловые пункты. Объекты энергетики</a>
            </li>
            <li class="footer__menu-item">
              <a href="#" class="footer__menu-link"> Промышленные производства</a>
            </li>
          </ul>

          <div class="footer__wrapper">
            <?php
            wp_nav_menu([
              'theme_location' => 'menu-footer-industries',
              'container' => '',
              'menu_class' => 'footer__menu footer__menu--four'
            ])
            ?>
          </div>
        </div>
        <div class="footer__center">
          <a href="#" class="footer__center-contact footer__center-contact--address">
           <?php the_field('adres_v_podvale', 'options');?>
          </a>
          <a href=" <?php the_field('pochta_v_podvale_ssylka', 'options');?>" class="footer__center-contact footer__center-contact--email">
          <?php the_field('pochta_v_podvale', 'options');?>
          </a>
          <a href="<?php the_field('telefon_v_podvale_ssylka', 'options');?>" class="footer__center-contact footer__center-contact--phone">
          <?php the_field('telefon_v_podvale', 'options');?>
          </a>
        </div>
        <div class="footer__bottom">
          <div class="footer__bottom-wrapper">
            <a href="/" class="footer__bottom-logo">
              <img src="<?php echo get_template_directory_uri()?>./assets/images/home/logo.png" alt="img">
            </a>
            <div class="footer__bottom-copyright">
              © 2022 Aquacell
            </div>
          </div>
          <p class="footer__bottom-text">
            Используя этот сайт вы соглашаетесь с <span>политикой конфидерциальности и условиями использования</span> Google
          </p>
        </div>
      </div>
    </div>
    <?php wp_footer();?>
  </footer>  

<div class="modal">
  <div class="container">
    <div class="services-form services-form--modal">
          <div class="services-form__block services-form__block--modal">
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
          <div data-close class="modal__close">&times;</div>
    </div>  
  </div>
</div>


  <script src="js/main.min.js"></script>
</body>

</html>