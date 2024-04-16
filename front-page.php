<?php get_header(); ?>
    <style type="text/css">
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_img','get_template_directory()'.'/img/showcase.jpg');?>) no-repeat center center !important;
      }
      
    </style>
    <section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading','Custom Bootstrap Wordpress Theme') ?></h1>
        <p><?php echo get_theme_mod('showcase_desc','Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam') ?></p>
        <a href="<?php echo get_theme_mod('showcase_btn_link','#') ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('showcase_btn_text','Read More') ?></a>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <?php if(is_active_sidebar('box1')) : ?>
                <?php dynamic_sidebar('box1') ?>
              <?php endif; ?>
          </div>

          <div class="col-md-4">
              <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2') ?>
              <?php endif; ?>
          </div>

          <div class="col-md-4">
              <?php if(is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3') ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </section>


    <?php get_footer();?>