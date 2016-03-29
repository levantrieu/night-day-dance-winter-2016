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
<div class="icons"><i class="fa fa-facebook fa-lg"></i></div>
<div class="icons"><i class="fa fa-twitter fa-lg"></i></div>
<div class="icons"><i class="fa fa-instagram fa-lg"></i></div>
</div>
<div class="info-wrapper">
<a class="footer-links" href="<?php echo esc_url( home_url() ); ?>/About/">About</a>
<a class="footer-links" href="<?php echo esc_url( home_url() ); ?>/About/">contact</a>
<a class="footer-links" href="<?php echo esc_url( home_url() ); ?>/About/">Outreach Programs</a>
<a class="footer-links" href="<?php echo esc_url( home_url() ); ?>/About/">FAQ</a>
</div>
</div>

</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
