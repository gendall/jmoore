<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jmoore
 */

get_header(); ?>

<section class="about-section">
  <div class="container">
    <div class="sidebar">
      <img class="headshot" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/headshot.jpg" alt="">
    </div> <!-- /.sidebar -->

    <div class="main-content">
      <h1>About Jennifer Moore </h1>
      <p>Jennifer Moore is a passionate reader and writer of all things romance due to the need to balance the rest of her world that includes a perpetually traveling husband and four active sons, who create heaps of laundry that are anything but romantic. She suffers from an acute addiction to 18th and 19th century military history and literature. Jennifer has a B.A. in Linguistics from the University of Utah and is a Guitar Hero champion. She lives in northern Utah with her family, but most of the time wishes she was on board a frigate during the Age of Sail.</p>

      <h2>FAQ</h2>
      <hr class="purple-hr">

      <ul>
        <li>
          <h5 class="question">How do you find time to write?</h5> <!-- /.question -->

          <div class="answer">
            <p>This is the question I get more than any other. And it’s not always asked in such a nice way—often people tell me they’d love to write, but they just don’t have time. Or say how lucky I am to have time to do what I want.  Usually accompanied by a look of longing…as if I have something they don’t. So, here’s the thing. We all have 24 hours in a day, and it’s a matter of prioritizing. Which means trade off. I volunteer at my kids’ schools a very few times per year. I rarely go to lunch with friends. I don’t often wander around the mall, or the park, or go for a long hike or drive. I watch very little TV, and have to restrict my internet time.</p>
            <p>And it’s hard. Because I like all of those other things. Writing doesn’t just take time. It takes big chunks of it, when you can block everything else out and delve deeply into your characters’ heads. And big chunks of time are hard to come by, so I need to get creative. I wake up early to get words down before anyone wakes up. I write at soccer practice, and at the pool. Sometimes, I run to the library for a few hours, or have a “write date” with other writer friends. When I get desperate—especially during summer vacation, I institute a “unless there’s blood or a fire, don’t open my office door” policy. I have a lot of guilt for taking time away from my family, because workshops, speaking engagements, book clubs, critique groups, and other writerly things usually happen in the evenings or weekends.</p>
            <p>But again, trade off, and priorities. I treat writing like a job, spending a certain amount of time on marketing, revisions, and adding to my word count every day.</p>
          </div> <!-- /.answer -->
        </li>

        <li>
          <h5 class="question">What do you read?</h5> <!-- /.question -->

          <div class="answer">
          </div> <!-- /.answer -->
        </li>

        <li>
          <h5 class="question">Where do you get your ideas?</h5> <!-- /.question -->

          <div class="answer">
          </div> <!-- /.answer -->
        </li>

        <li>
          <h5 class="question">What are you working on now?</h5> <!-- /.question -->

          <div class="answer">
          </div> <!-- /.answer -->
        </li>

        <li>
          <h5 class="question">What future projects are you planning?</h5> <!-- /.question -->

          <div class="answer">
          </div> <!-- /.answer -->
        </li>

        <li>
          <h5 class="question">Do you have any advice for aspiring writers?</h5> <!-- /.question -->

          <div class="answer">
          </div> <!-- /.answer -->
        </li>
      </ul>      
    </div> <!-- /.main-content -->

  </div> <!-- /.container -->
</section> <!-- /.about-section -->



<?php get_footer(); ?>
