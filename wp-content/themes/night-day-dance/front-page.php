<?php
/**
* The main template file.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
  <!-- <main id="main" class="site-main" role="main"> -->
  <div class="fc-wrapper">
    <div class="package">
      <span class="mobile-title-wrapper">
        <h3 class="mt">the first dance isn't<br> the last ...</h3>
      </span>
      <form class="button-form">
        <div class="now">
          <span class="book">book your</span>
        </div>
        <button class="book-now" type="submit">Wedding package <i class="fa fa-arrow-right"></i></button>
      </form>
      <span class="border one">
        <h2>book your <br>wedding <br>package</h2>
      </span>
    </div>
    <div class="column">
      <div class="learn">
        <span class="mobile-title-wrapper">
          <h3 class="mt yellow">learn some new moves</h3>
        </span>
        <form class="lm">
          <button class="learn-moves" type="submit">find your routine <i class="fa fa-arrow-right"></i></button>
        </form>
        <span class="border two">
          <h2>learn some<br> new<br> moves</h2>
        </span>

      </div>
      <div class="dance">
        <span class="mobile-title-wrapper">
          <h3 class="mt red">office parties just<br>got exciting</h3>
        </span>
        <form class="df">
          <button class="friends" type="submit">dance with friends <i class="fa fa-arrow-right"></i></button>
        </form>
        <span class="border three">
          <h2>dance with <br>your <br>friends</h2>
        </span>
      </div>
    </div>
  </div>
  <div class="title-wrapper">
    <div class="title">
      <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
          <?php dynamic_sidebar( 'home_right_1' ); ?>
        </div><!-- #primary-sidebar -->
      <?php endif; ?>

      <div class="round"></div>
    </div>
  </div>
  <div class="fpi-wrapper">
    <h2>get ready to dance</h2>
    <div class="front-page-image">
      <form class="bc-wrapper" action="/contact/" method="get" >
        <button class="contact-us-img" type="submit">contact us</button>
      </form>
    </div>
  </div>
    
  <!-- </main> -->
</div><!-- #primary -->

<?php get_footer(); ?>
