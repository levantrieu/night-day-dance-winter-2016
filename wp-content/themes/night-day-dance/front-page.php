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
        <div class="button-wrapper">
          <div class="now">
            <span class="book">book your</span>
          </div>
          <button class="book-now" type="submit">Wedding package <i class="fa fa-arrow-right"></i></button>
        </div>
      </span>
      <span class="border one">
        <h2>book your <br>wedding <br>package</h2>
      </span>
    </div>
    <div class="column">
      <div class="learn">
        <span class="mobile-title-wrapper">
          <h3 class="mt yellow">learn some new moves</h3>

          <button class="learn-moves" type="submit">find your routine <i class="fa fa-arrow-right"></i></button>

        </span>
        <span class="border two">
          <h2>learn some<br> new<br> moves</h2>
        </span>

      </div>
      <div class="dance">
        <span class="mobile-title-wrapper">
          <h3 class="mt red">office parties just<br>got exciting</h3>
          <button class="friends" type="submit">dance with friends <i class="fa fa-arrow-right"></i></button>
        </span>
        <span class="border three">
          <h2>dance with <br>your <br>friends</h2>
        </span>
      </div>
    </div>
  </div>
  <div class="title-wrapper">
    <div class="title">
      <h1>Who We Are</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="round"><img src="<?php echo get_template_directory_uri() . '/images\/Bitmap' ?>.png" alt=""/></div>
    </div>
  </div>
  <div class="fpi-wrapper">
    <h2>get ready to dance</h2>
    <div class="front-page-image">
      <div class="bc-wrapper">
      <button class="book-now-img" type="submit">book now</button>
      <button class="contact-us-img" type="submit">contact us</button>
    </div>
    </div>
  </div>


  <!-- </main> -->
</div><!-- #primary -->

<?php get_footer(); ?>
