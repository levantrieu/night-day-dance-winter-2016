<?php
/*
*Template Name: About Page
*/

get_header(); ?>


<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="container">

      <section class="helping">
        <!-- <div class="about-shadow"> -->
        <img class="about-image" src="<?php echo get_template_directory_uri() . '/images/People-dancing' ?>.png" alt=""/>
      <!-- </div> -->
        <div class="about-p-wrapper">
          <p>Helping Every Day</p>
          <p class="second-line">People Dance For Life</p>
        </div>
      </section>
      <div class="who-we-are">Who We Are</div>
      <section class="about-content">
        <p class="mobile-ac">Collectively, The instructors of Night and Day Dance have been dancing, performing and teaching for over 60 years!</p>
        <p class="desktop-ac">Collectively, The instructors of Night and Day Dance have been dancing, performing and teaching for over 60 years! Individually, We offer a wide range of skills and backgrounds. Common to us all is the ability to teach absolutely anyone how to dance!</p>
        <button class="ab-desktop" type="submit">book</button>
      </section>
      <div class="about-location">Location</div>
      <section class="location">
        <p>You can find us around BC and even in Alberta - in Vancouver, Victoria, NewWest, the Sunshine Coast, and Edmonton!</p>
        <p class="desktop-location">You can find us around BC and even in Alberta - in Vancouver, Victoria, NewWest, the Sunshine Coast, and Edmonton! Check out the maps of our locations below. We offer most private lessons in the privacy of our home studies.</p>
        <button class="ac-desktop" type="submit">contact us</button>

      </section>
      <div class="about-buttons">
        <button class="about-book" type="submit">book</button>
        <button class="about-contact" type="submit">contact us</button>
      </div>




    </div>
  </main>
</div>
<?php get_footer(); ?>
