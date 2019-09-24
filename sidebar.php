<div class="col-3" id="sidebarwidg">
<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
	<ul id="main-sidebar">
	<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</ul>
<?php endif; ?>


  <!-- Search for
  <ul>
    <li><a href="#">airplane</a></li>
    <li><a href="#">hotel</a></li>
    <li><a href="#">tour</a></li>
  </ul> -->
</div>