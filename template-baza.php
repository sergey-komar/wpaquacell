<?php
/**
 * Template Name: База знаний
 */
?>

<?php get_header('page');?>
<main class="main">
    <div class="baza">
        <div class="container">
            <h1 class="baza__title title">База Знаний</h1>
            <div class="baza-tabs">

                <div class="baza-tabs__item">
                    <button class="baza-tabs__item-btn one">
                       Водоснабжение
                    </button>
                    <button class="baza-tabs__item-btn two">
                       Канализация  
                    </button>
                    <button class="baza-tabs__item-btn three">насосные станции</button>
                    <button class="baza-tabs__item-btn four">
                       очистные  <br>сооружения
                    </button>
                    <button class="baza-tabs__item-btn fife">
                        водостоки
                    </button>
                    <button class="baza-tabs__item-btn six">
                        гидротехнические сооружения
                    </button>
                    <button class="baza-tabs__item-btn seven">
                       орошение 
                    </button>
                    <button class="baza-tabs__item-btn eiht">
                       охрана<br> окружающей среды 
                    </button>
                    <button class="baza-tabs__item-btn nine">
                        Дренаж 
                    </button>
                    <button class="baza-tabs__item-btn ten">
                        Габионные<br> сооружения
                    </button>
                </div>

              
                <div class="baza-tabs__content">
                 
                    <h2 class="baza-tabs__content-title">Водоснабжение</h2>
                    <div class="baza-tabs__block">
                        <?php
                        global $post;
                        $water = new WP_Query([
                          'posts_per_page' => '2',
                          'post_type' => 'water'
                        ])
                        ?>
                        <?php if($water->have_posts()) : while($water->have_posts()) : $water->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title()?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?> 
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>
                
                    <div class="blog-home__inner blog-home__inner-tabs">

                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">

                    
                      <?php
                      global $post;
                      $hide = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'hide'
                      ])
                      ?>
                      <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                      <div class="blog-home__item">
                        <div class="blog-home__wrapper">
                         
                          <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                          
                          <div class="blog-home__wrapper-mobile">
                            <div class="blog-home__item-calendar">
                              <?php the_time('j F Y')?>
                            </div>
                            <div class="blog-home__slider-block">
                              <div class="blog-home__item-title">
                                <?php the_title();?>
                              </div>
                              <div class="blog-home__item-text">
                                <?php the_excerpt();?>
                              </div>
                              <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                            </div>
                          </div>
                       
                        </div>
                      </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>
                
               
                <div class="baza-tabs__content">
               
                    <h2 class="baza-tabs__content-title">Канализация</h2>

                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $sewerage = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'sewerage'
                      ])
                      ?>
                      <?php if($sewerage->have_posts()) : while($sewerage->have_posts()) : $sewerage->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?> 
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
          
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">

                    
                            <?php
                            global $post;
                            $hide = new WP_Query([
                              'posts_per_page' => '4',
                              'post_type' => 'hide'
                            ])
                            ?>
                            <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                            <div class="blog-home__item">
                              <div class="blog-home__wrapper">
                              
                                <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                                
                                <div class="blog-home__wrapper-mobile">
                                  <div class="blog-home__item-calendar">
                                    <?php the_time('j F Y')?>
                                  </div>
                                  <div class="blog-home__slider-block">
                                    <div class="blog-home__item-title">
                                      <?php the_title();?>
                                    </div>
                                    <div class="blog-home__item-text">
                                      <?php the_excerpt();?>
                                    </div>
                                    <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                                  </div>
                                </div>
                            
                              </div>
                            </div>
                              <?php endwhile; endif;?>
                              <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>
                
                <div class="baza-tabs__content">
                    <h2 class="baza-tabs__content-title">насосные станции</h2>
                        
                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $pumping = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'pumping'
                      ])
                      ?>
                      <?php if($pumping->have_posts()) : while($pumping->have_posts()) : $pumping->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?>  
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                      <?php endwhile; endif;?>
                      <?php wp_reset_postdata();?>
            
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">
                        <?php
                        global $post;
                        $hide = new WP_Query([
                          'posts_per_page' => '4',
                          'post_type' => 'hide'
                        ])
                        ?>
                        <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                          
                            <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
                              <div class="blog-home__item-calendar">
                                <?php the_time('j F Y')?>
                              </div>
                              <div class="blog-home__slider-block">
                                <div class="blog-home__item-title">
                                  <?php the_title();?>
                                </div>
                                <div class="blog-home__item-text">
                                  <?php the_excerpt();?>
                                </div>
                                <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                              </div>
                            </div>

                          </div>
                        </div>
                          <?php endwhile; endif;?>
                          <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>

                <div class="baza-tabs__content">
                    <h2 class="baza-tabs__content-title"> очистные сооружения</h2>

                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $clearing = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'clearing'
                      ])
                      ?>
                      <?php if($clearing->have_posts()) : while($clearing->have_posts()) : $clearing->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?> 
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                      <?php endwhile; endif;?>
                      <?php wp_reset_postdata();?>
          
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">
                        <?php
                        global $post;
                        $hide = new WP_Query([
                          'posts_per_page' => '4',
                          'post_type' => 'hide'
                        ])
                        ?>
                        <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                          
                            <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
                              <div class="blog-home__item-calendar">
                                <?php the_time('j F Y')?>
                              </div>
                              <div class="blog-home__slider-block">
                                <div class="blog-home__item-title">
                                  <?php the_title();?>
                                </div>
                                <div class="blog-home__item-text">
                                  <?php the_excerpt();?>
                                </div>
                                <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                              </div>
                            </div>

                          </div>
                        </div>
                          <?php endwhile; endif;?>
                          <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>

                <div class="baza-tabs__content">
                    <h2 class="baza-tabs__content-title">водостоки</h2>

                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $gutters = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'gutters'
                      ])
                      ?>
                      <?php if($gutters->have_posts()) : while($gutters->have_posts()) : $gutters->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?> 
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                      <?php endwhile; endif;?>
                      <?php wp_reset_postdata();?>
          
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">
                        <?php
                        global $post;
                        $hide = new WP_Query([
                          'posts_per_page' => '4',
                          'post_type' => 'hide'
                        ])
                        ?>
                        <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                          
                            <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
                              <div class="blog-home__item-calendar">
                                <?php the_time('j F Y')?>
                              </div>
                              <div class="blog-home__slider-block">
                                <div class="blog-home__item-title">
                                  <?php the_title();?>
                                </div>
                                <div class="blog-home__item-text">
                                  <?php the_excerpt();?>
                                </div>
                                <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                              </div>
                            </div>

                          </div>
                        </div>
                          <?php endwhile; endif;?>
                          <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>


                <div class="baza-tabs__content">
                    <h2 class="baza-tabs__content-title">
                        гидротехнические сооружения
                    </h2>

                  
                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $hydrotechnical = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'hydrotechnical'
                      ])
                      ?>
                      <?php if($hydrotechnical->have_posts()) : while($hydrotechnical->have_posts()) : $hydrotechnical->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?>  
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                      <?php endwhile; endif;?>
                      <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">
                        <?php
                        global $post;
                        $hide = new WP_Query([
                          'posts_per_page' => '4',
                          'post_type' => 'hide'
                        ])
                        ?>
                        <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                          
                            <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
                              <div class="blog-home__item-calendar">
                                <?php the_time('j F Y')?>
                              </div>
                              <div class="blog-home__slider-block">
                                <div class="blog-home__item-title">
                                  <?php the_title();?>
                                </div>
                                <div class="blog-home__item-text">
                                  <?php the_excerpt();?>
                                </div>
                                <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                              </div>
                            </div>

                          </div>
                        </div>
                          <?php endwhile; endif;?>
                          <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>

                <div class="baza-tabs__content">
                    <h2 class="baza-tabs__content-title">орошение</h2>

                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $irrigation = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'irrigation'
                      ])
                      ?>
                      <?php if($irrigation->have_posts()) : while($irrigation->have_posts()) : $irrigation->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?> 
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                      <?php endwhile; endif;?>
                      <?php wp_reset_postdata();?>
          
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">
                        <?php
                        global $post;
                        $hide = new WP_Query([
                          'posts_per_page' => '4',
                          'post_type' => 'hide'
                        ])
                        ?>
                        <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                          
                            <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
                              <div class="blog-home__item-calendar">
                                <?php the_time('j F Y')?>
                              </div>
                              <div class="blog-home__slider-block">
                                <div class="blog-home__item-title">
                                  <?php the_title();?>
                                </div>
                                <div class="blog-home__item-text">
                                  <?php the_excerpt();?>
                                </div>
                                <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                              </div>
                            </div>

                          </div>
                        </div>
                          <?php endwhile; endif;?>
                          <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>

                <div class="baza-tabs__content">
                    <h2 class="baza-tabs__content-title">
                        охрана окружающей среды
                    </h2>

                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $security = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'security'
                      ])
                      ?>
                      <?php if($security->have_posts()) : while($security->have_posts()) : $security->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?> 
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                      <?php endwhile; endif;?>
                      <?php wp_reset_postdata();?>
          
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">
                        <?php
                        global $post;
                        $hide = new WP_Query([
                          'posts_per_page' => '4',
                          'post_type' => 'hide'
                        ])
                        ?>
                        <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                          
                            <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
                              <div class="blog-home__item-calendar">
                                <?php the_time('j F Y')?>
                              </div>
                              <div class="blog-home__slider-block">
                                <div class="blog-home__item-title">
                                  <?php the_title();?>
                                </div>
                                <div class="blog-home__item-text">
                                  <?php the_excerpt();?>
                                </div>
                                <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                              </div>
                            </div>

                          </div>
                        </div>
                          <?php endwhile; endif;?>
                          <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>

                <div class="baza-tabs__content">
                    <h2 class="baza-tabs__content-title">Дренаж</h2>

                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $drainage = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'drainage'
                      ])
                      ?>
                      <?php if($drainage->have_posts()) : while($drainage->have_posts()) : $drainage->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                  <?php the_excerpt();?> 
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                      <?php endwhile; endif;?>
                      <?php wp_reset_postdata();?>
          
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">
                        <?php
                        global $post;
                        $hide = new WP_Query([
                          'posts_per_page' => '4',
                          'post_type' => 'hide'
                        ])
                        ?>
                        <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                          
                            <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
                              <div class="blog-home__item-calendar">
                                <?php the_time('j F Y')?>
                              </div>
                              <div class="blog-home__slider-block">
                                <div class="blog-home__item-title">
                                  <?php the_title();?>
                                </div>
                                <div class="blog-home__item-text">
                                  <?php the_excerpt();?>
                                </div>
                                <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                              </div>
                            </div>

                          </div>
                        </div>
                          <?php endwhile; endif;?>
                          <?php wp_reset_postdata();?>
                    </div>


                    <button class="baza-tabs__btn">Загрузить больше</button>
                </div>

                <div class="baza-tabs__content">
                    <h2 class="baza-tabs__content-title">
                        Габионные сооружения
                    </h2>

                    <div class="baza-tabs__block">
                      <?php
                      global $post;
                      $gabion = new WP_Query([
                        'posts_per_page' => '2',
                        'post_type' => 'gabion'
                      ])
                      ?>
                      <?php if($gabion->have_posts()) : while($gabion->have_posts()) : $gabion->the_post()?>
                        <div class="baza-tabs__left">
                            <div class="baza-tabs__left-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="baza-tabs__left-calendar">
                            <?php the_time('j F Y')?>
                            </div>
                            <div class="baza-tabs__left-wrapper">
                                <div class="baza-tabs__left-title">
                                   <?php the_title();?>
                                </div>
                                <div class="baza-tabs__left-text">
                                    <?php the_excerpt();?> 
                                </div>
                                <a href="<?php the_permalink()?>" class="baza-tabs__left-link">Читать далее</a>
                            </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php wp_reset_postdata();?>
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs">
                      <?php
                      global $post;
                      $news = new WP_Query([
                        'posts_per_page' => '4',
                        'post_type' => 'news'
                      ])
                      ?>
                      <?php if($news->have_posts()) : while($news->have_posts()) : $news->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                           
                            <img src="<?php the_field('odna_novost_izobrazhenie');?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
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
                        </div>
                      <?php endwhile; endif;?>
                      <?php wp_reset_postdata();?>
          
                    </div>

                    <div class="blog-home__inner blog-home__inner-tabs blog-home__inner-hide">
                        <?php
                        global $post;
                        $hide = new WP_Query([
                          'posts_per_page' => '4',
                          'post_type' => 'hide'
                        ])
                        ?>
                        <?php if($hide->have_posts()) : while($hide->have_posts()) : $hide->the_post()?>
                        <div class="blog-home__item">
                          <div class="blog-home__wrapper">
                          
                            <img src=" <?php the_post_thumbnail_url();?>" alt="img" class="blog-home__item-img">
                            
                            <div class="blog-home__wrapper-mobile">
                              <div class="blog-home__item-calendar">
                                <?php the_time('j F Y')?>
                              </div>
                              <div class="blog-home__slider-block">
                                <div class="blog-home__item-title">
                                  <?php the_title();?>
                                </div>
                                <div class="blog-home__item-text">
                                  <?php the_excerpt();?>
                                </div>
                                <a href=" <?php the_permalink();?>" class="blog-home__item-link">Читать далее</a>
                              </div>
                            </div>

                          </div>
                        </div>
                          <?php endwhile; endif;?>
                          <?php wp_reset_postdata();?>
                    </div>

                    <button class="baza-tabs__btn">Загрузить больше</button>
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
        </div>
    </div>
</main>
<?php get_footer();?>