<?php get_header(); ?>
    <h1>Search Restults</h1>
      <?php if(have_posts()){ ?>
        <?php while(have_posts()): the_post();?>
          <?php if(has_post_thumbnail()){ ?>

            <div class="card" style="width: 18rem;">
              <a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="card-img-top"></a>
              <div class="card-body">
                <a href="<?php echo get_permalink(); ?>"><h5 class="card-title"><?php the_title() ?></h5></a>
                <p class="card-text"><?php the_excerpt() ?></p> <!-- the_content()だと本文全て、the_excerptだと一部抜粋される -->
                <a href="<?php echo get_permalink(); ?>" class="card-link">Read more</a>
              </div>
            </div>

          <?php } else{ ?>

            <div class="card" style="width: 18rem;">
              <a href="<?php echo get_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/noimage.png" class="card-img-top"></a>
              <div class="card-body">
                <a href="<?php echo get_permalink(); ?>"><h5 class="card-title"><?php the_title() ?></h5></a>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php echo get_permalink(); ?>" class="card-link">Read more</a>
              </div>
            </div>

          <?php } ?>
        <?php endwhile;?>
      <?php } else { ?>
        <h2><?php echo "Nothing Found"; ?></h2>
        <?php if (has_custom_logo()) {
          echo the_custom_logo(); } ?> 
      <?php } ?>
      <?php the_posts_pagination(); ?>
  </div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>