<section class="main-banner">
    <div class="main-banner__content">
    <?php $args = array( 'post_type'=>'Banner',
          'posts_per_page' => 3); ?>
    <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-banner__item">
        <div class="main-banner__text">
          <div class="main-banner__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-natalia-godoy-consultores-organizacionales-fuente-ajustada.png">
          </div>
        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner1.png">
        </div>
      </div>
      <div class="main-banner__item">
        <div class="main-banner__text">
          <div class="main-banner__logo">
            <img data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-natalia-godoy-consultores-organizacionales-fuente-ajustada.png">
          </div>
        </div>
        <div class="main-banner__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner2.png">
        </div>
      </div>
    <?php endwhile; ?>
    </div>

    <div class="main-banner__onda">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Grupo-19.png">
    </div>
  </section>


