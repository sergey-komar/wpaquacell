<?php
/**
 * Template Name: Главная страница
 */
?>

<?php get_header();?>
<div class="home-heading">
    <div class="container">
      <h1 class="home-heading__title">
        Производство <span>напорных стеклопластиковых фильтров</span> для водоподготовки
      </h1>
      <div class="home-heading__scroll">
        <div class="home-heading__scroll-title">ЛИСТАЙТЕ ВНИЗ</div>
        <button class="home-heading__scroll-btn">
          <img src="<?php echo  get_template_directory_uri()?>./assets/images/home/button-scroll.png" alt="img">
        </button>
      </div>
    </div>
  </div>
  
  <main class="main main-home">
    <div class="catalog">
      <div class="container">
        <div class="catalog__block">
          <div class="catalog__content">
            <h2 class="catalog__content-title">
              <span>Каталог</span> корпусов
            </h2>
            <p class="catalog__content-text">
              Оaсновным профилем нашей деятельности - является производство стеклопластиковых корпусов фильтров для очистки воды.
            </p>
            <p class="catalog__content-text">
              Наши композитные фильтры - полностью Российский продукт. <span>Локализация производства достигает 98%
              </p></span> 
          </div>
          <div class="catalog__img">
            <a href="<?php echo get_post_type_archive_link('fiberglass'); ?>" class="catalog__img-item" style="background-image: url('<?php echo  get_template_directory_uri()?>/assets/images/home/corps-1.jpg');">
              <div class="catalog__img-title">стеклопластиковые</div>
            </a>
            <a href="<?php echo get_post_type_archive_link('metal'); ?>" class="catalog__img-item" style="background-image: url('<?php echo  get_template_directory_uri()?>/assets/images/home/corps-2.jpg');">
              <div class="catalog__img-title"> металлические</div>
            </a>
            <a href="<?php echo get_post_type_archive_link('omus'); ?>" class="catalog__img-item" style="background-image: url('<?php echo  get_template_directory_uri()?>/assets/images/home/corps-3.jpg');">
              <div class="catalog__img-title"> обратного омуса</div>
            </a>
          </div>
        </div>
      </div>
    </div>
 
    <div class="industries">
      <div class="container">
        <h2 class="industries__title">
          Отрасли в которых мы работаем 
            <span>по комплексным проектам</span>
        </h2>
        <div class="industries__block">
          <a href="#" class="industries__block-item" style="background-image: url('<?php echo  get_template_directory_uri()?>/assets/images/home/industries-1.jpg');">
            <div class="industries__block-title">пищевое производство</div>
          </a>
          <a href="#" class="industries__block-item" style="background-image: url('<?php echo  get_template_directory_uri()?>/assets/images/home/industries-2.jpg');">
            <div class="industries__block-title">
              жилищно-коммунальное хозяйство</div>
          </a>
          <a href="#" class="industries__block-item" style="background-image: url('<?php echo  get_template_directory_uri()?>/assets/images/home/industries-3.jpg');">
            <div class="industries__block-title">
              котлы, тепловые пункты объекты энергетики
            </div>
          </a>
          <a href="#" class="industries__block-item" style="background-image: url('<?php echo  get_template_directory_uri()?>/assets/images/home/industries-4.jpg');">
            <div class="industries__block-title">
              Промышленные производства
            </div>
          </a>
        </div>
      </div>
    </div>
 
    <div class="blog-home">
      <div class="container">
        <div class="blog-home__block">
          <div class="blog-home__inner">
            <h2 class="blog-home__title">Блог и Новости</h2>
            <a href="<?php echo get_post_type_archive_link('news'); ?>" class="blog-home__link">Перейти ко всем новостям</a>
          </div>
          <div class="blog-home__arrows"></div>
        </div>

        <div class="blog-home__slider">
          <div class="blog-home__slider-inner">

          <?php
          global $post;
          $news = new WP_Query([
            'posts_per_page' => '30',
            'post_type' => 'news'
          ])
          ?>
          <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
            <div class="blog-home__item">
              <div class="blog-home__wrapper blog-home__wrapper--slider">
                <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                <div class="blog-home__item-calendar">
                <?php the_time('j F Y')?>
                </div>
                <div class="blog-home__slider-block">
                  <div class="blog-home__item-title">
                   <?php the_title();?>
                  </div>
                  <p class="blog-home__item-text">
                   <?php the_field('odna_novost_tekst');?>
                  </p>
                  <a href="<?php the_permalink()?>" class="blog-home__item-link">Читать далее</a>
                </div>
              </div>
            </div>
          <?php endwhile; endif;?>
          <?php wp_reset_postdata();?>

          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();?>