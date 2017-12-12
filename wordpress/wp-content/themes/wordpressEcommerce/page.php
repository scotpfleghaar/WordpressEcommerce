
<?php get_header();?>

  <div class="row">
    <div class="large-8 medium-8 columns">
      <div class="products row">

      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
       
        <div class="large-12 columns">
            <h3><?php the_title();?></h3>
        </div>

        <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail();?>
           <?php endif; ?>
           
           <?php the_content();?>
        <?php endwhile;?>
      <?php endif; ?>

       
      </div>
    </div>

    <div class="large-4 medium-4 columns">
     <?php if(is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif;?>
    </div>
  </div>

 

<?php get_footer();?>