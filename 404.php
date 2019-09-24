<?php get_header(); ?>
    <h1 style="font-size: 100px;">404</h1>
    <h2>Page not found</h2>
    <form action="<?php bloginfo('url'); ?>" method="get">
      <input type="text" name="s">
      <input type="submit" value="Find this instead">
    </form>


  </div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>