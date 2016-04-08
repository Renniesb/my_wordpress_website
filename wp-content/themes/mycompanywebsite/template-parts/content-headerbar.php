<?php

$facebook_username      = get_field('facebook_username');
$twitter_username     = get_field('twitter_username');
$google_plus_username   = get_field('google_plus_username');
$linkedin_username      = get_field('linkedin_username');
$github_username     = get_field('github_username');


 ?>



<!--================================
=            Header Bar            =
=================================-->

<div class="container" id="content">

    <div class="rounded-corners">
  		<div class="row" >

        <div class="col-xs-6">
          <img class="title-logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo-large.jpg" alt="my logo image" srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo-small.jpg 320w, <?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo-medium.jpg 640w, <?php bloginfo('stylesheet_directory'); ?>/assets/img/mouse_logo-large.jpg 1024w" sizes="(min-width: 300px) 50vw, (min-width: 700px) 70vw, 100vw">
            <!-- <div id="request"><a href="#quote" class="btn btn-secondary">Request a quote</a></div> -->
           <a id="request" href="#quote"><button class="btn btn-secondary">Request a quote</button></a>

        </div><!-- column -->

        <div class="col-xs-6 text-right text-uppercase">
          <h1 class="title-super">Rennie Bevineau</h1>
          <h4 class="subtitle zero-bottom"><strong>Front-End Web Developer</strong></h4>

            <?php if (!empty($twitter_username)) : ?>
              <a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
            <?php endif; ?>

            <?php if (!empty($linkedin_username)) : ?>
            <a href="https://www.linkedin.com/in/<?php echo $linkedin_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-linkedin"></i></a>
            <?php endif; ?>

            <?php if (!empty($facebook_username)) : ?>
            <a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
            <?php endif; ?>


            <?php if (!empty($google_plus_username)) : ?>
            <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
            <?php endif; ?>

            <?php if (!empty($github_username)) : ?>
            <a href="https://github.com/<?php echo $github_username; ?>" target="_blank" class="badge social github"><i class="fa fa-github"></i></a>
            <?php endif; ?>

            <a class="fa fa-skype badge social skype" onclick="Skype.tryAnalyzeSkypeUri('call', '0');" href="skype:'scott.usa.chicago'?call">
            </a>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-xs-12">
        <hr class="rounded-corners">
      </div>
    </div>
