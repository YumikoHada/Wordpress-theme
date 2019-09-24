<?php get_header(); ?>
    <h1>Hello, world!</h1>
      <?php if(have_posts()):?>
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
      <?php endif;?>
      <?php the_posts_pagination(); ?>


      <!-- <div class="card" style="width: 18rem;">
        <img src="<?php bloginfo('template_url'); ?>images/aegeansea1.jpeg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">aegeansea1</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="<?php bloginfo('template_url'); ?>/images/aegeansea2.jpeg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">aegeansea2</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="<?php bloginfo('template_url'); ?>/images/aegeansea3.jpeg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">aegeansea3</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="<?php bloginfo('template_url'); ?>/images/aegeansea4.jpeg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">aegeansea4</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
      </div> 
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
-->
  </div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>