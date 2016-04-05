<?php
/**
* The template for displaying the footer.
*
* @package RED_Starter_Theme
*/

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info">
    <div class="footer-form">
      <div class="form-wrapper">
        <div class="wrap">
          <div class="topic-wrapper">
            <span>Night & Day Newsletter</span>
          </div>
          <div class="first-last-wrapper">
            <input type="text" placeholder="first name" class="name">
            <input type="text" placeholder="last name" class="name">
          </div>
          <input type="text" placeholder="email address" class="email">
          <div class=button-wrapper>
            <button class="sign-up" type="submit">sign up</button>
          </div>
        </div>
      </div>
      <div class="icon-wrapper">
        <div class="icons"><a href="https://www.facebook.com/nightanddaydance/"><i class="fa fa-facebook fa-lg"></i></div>
        <div class="icons"><a href="https://twitter.com/nddance"><i class="fa fa-twitter fa-lg"></i></div>
        <div class="icons"><a ><i class="fa fa-instagram fa-lg"></i></div>
      </div>
      <div class="info-wrapper">
        <?php wp_nav_menu( array(
          'sort_column' => 'menu_order',
          'theme_location' => 'footer-menu',
          'menu_class' => 'css-footer-menu',
        ) ); ?>
      </div>
    </div>
</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>
