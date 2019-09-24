<?php get_header(); ?>
    <?php while( have_posts() ) : the_post(); ?>    
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( 
            '<h1 class="heading-big entry-title">','</h1>'
          ); ?>
          <time class="tiny-text entry-date"><?php echo get_the_date(); ?></time>  
        </header>
        <?php if( has_post_thumbnail() ) : ?>
          <div class="entry-thumbnail">
              <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>
        <div class="entry-content">
          <?php the_content( '<span class="btn btn-primary">Continue Reading</span>' ); ?>
        </div>
      </article> 
    <?php endwhile; ?>
  </div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>