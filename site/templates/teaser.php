<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wrangler</title>
    <link rel="stylesheet" href="assets/css/foundation.css" />
    <link rel="stylesheet" href="assets/css/wrangler.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
      <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <!-- Navigation -->
  <div class="contain-to-grid sticky" data-options="sticky_on: large">
    <nav id="topbar" class="top-bar show-for-large-up" data-topbar>
      <ul class="title-area">
        <li id="teaserCenterLogo" >
          <a class="logo" href="#"><img src="assets/img/logo.png"/></a>
        </li>
      </ul>
    <section class="top-bar-section">
      <!--  <ul class="right topbarRight">
        <li class="has-dropdown">
          <a href="#">Hong Kong ( Eng )</a>
          <ul class="dropdown">
            <li><a href="#">Hong Kong ( 繁體字 )</a></li>
            <li><a href="#">China ( 简体字 )</a></li>
            <li><a href="#">Thailand ( Eng )</a></li>
          </ul>
        </li>
      </ul> -->
    </nav>

    <nav id="topbar" class="top-bar hide-for-large-up" data-topbar>
      <ul class="title-area">
        <li class="name">
          <a class="logo" href="index.php"><img src="assets/img/logo.png"/></a>
        </li>
        <!-- <li class="toggle-topbar menu-icon">
          <a href="#">Menu</a>
        </li> -->
      </ul>

      <!--  <section class="top-bar-section">

        <ul class="right topbarRight">
          <li class="has-dropdown">
            <a href="#">Hong Kong ( Eng )</a>
            <ul class="dropdown">
              <li><a href="#">Hong Kong ( 繁體字 )</a></li>
              <li><a href="#">China ( 简体字 )</a></li>
              <li><a href="#">Thailand ( Eng )</a></li>
            </ul>
          </li>
        </ul>

      </section> -->
    </nav>
  </div>

  <!-- End Navigation -->


    <!-- Desktop Slider -->
    
    <div id="teaserBg" class="large-12">
      <div id="campaignLogo">
        <img src="assets/img/teaser_logo.png">
        <!-- <div id="teaser_fbBtn"><a href="https://www.facebook.com/wranglerap" target="_blank">&nbsp;</a></div> -->
        <!-- <div id="teaser_instaBtn"><a href="http://instagram.com/wrangler_asiapacific" target="_blank">&nbsp;</a></div> -->
        <div id="teaserText">The Wrangler Sun Chaser challenge is coming up.<br>Stay tuned by liking us on <a href="https://www.facebook.com/wranglerap" target="_blank">Facebook</a> or following us on <a href="http://instagram.com/wrangler_asiapacific" target="_blank">Instagram</a>.</div>
      </div>
      <br><br>
      <div id="teaserScrollDown" data-0="opacity:1" data-200="opacity:0">
        <!-- img src="../assets/img/teaser_countDown.png"> -->
        The countdown has started...
      </div>
      <div id="date1" class="teaserDate" data-0="opacity:0" data-180="opacity:0" data-230="opacity:1">
        <img src="assets/img/teaser_date.png">
      </div>

      <div id="teaserScrollDownArrow" data-180="opacity:1" data-230="opacity:0">
        <img src="assets/img/teaser_scrollDownArrow.png">
      </div>
      
    </div>

    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/foundation.min.js"></script>
    <script src="assets/js/vendor/modernizr.js"></script>
    <script src="assets/js/skrollr.min.js"></script>
    
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../assets/js/skrollr.ie.min.js"></script>
    <![endif]-->
    
    <script>
      $(document).foundation();

      $(function() {
         _skrollr = skrollr.init();
      });

    </script>
  </body>
</html>


