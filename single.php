<?php get_header(); ?>
    <?php while( have_posts() ) : the_post(); ?>    
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( 
            '<h2 class="heading-big entry-title">','</h2>'
          ); ?>
          <time class="tiny-text entry-date">
            <?php echo get_the_date(); ?>
          </time> 
          <div class="category-tag-links">
            <div class="category-links">
              <span class="category-label">Category:</span>
              <?php the_category( ' / ' ); ?>
            </div>
            <div class="tag-label">
              <?php the_tags(); ?>
            </div>
          </div> 
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
    <hr class="horizonbar">
    <?php 
  the_post_navigation( array(
    'prev_text' => '<span class="size-small">Prev</span>',
    'next_text' => '<span class="size-small">Next</span>',
  ) ); 
  ?>
  </div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>