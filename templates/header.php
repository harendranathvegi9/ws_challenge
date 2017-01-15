<nav class="cadetblue">
  <div class="section">
  <div class="nav-wrapper">
    <div id="logo"></div>
    <a class="brand-logo right" href="#">MENU<i class="fa fa-bars right" aria-hidden="true"></i></a>
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'right hide-on-med-and-down']);
    endif;
    ?>
  </div>
  </div>
</nav>