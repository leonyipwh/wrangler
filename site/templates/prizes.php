<?php snippet('header') ?>

    <div id="reward_lowerContainer">
      <br>
      <div class="row">
        <div class="large-12 columns">
          <br>
          <br class="hide-for-small">
          <br class="hide-for-small">
          <span class="hide-for-small"><img src="../assets/img/rewardBannerTitle.png"></span>
          <span class="show-for-small-only"><img src="../assets/img/rewardBannerTitle_mobile.png"></span>
          <br class="hide-for-small">
          <br class="hide-for-small">
          <br>
          <div id="rewardBannerContent">
            <span id="allWeeklyWinners">Wrangler is all about the open road, so we’re giving the ultimate Sun Chaser a chance to embark on an unforgettable journey:</span>
            <br>
            <br>
            <span class="boldAndUnderline">A 5-day trip, flight and accommodation included, to a country of choice. </span>
            <br>
            <br>
            <span>9 markets are competing for the grand prize, so it’s time to get creative!</span>
            <br>
            <br>
            <span class="floatRight">*Terms &#38; Conditions apply. </span>
          </div>
        </div>
      </div>
    </div>

    <div id="lowerContainer">
      <br>
      <br>
      <div class="line"></div>
      <br>
      <div class="row">
        <div class="large-12 columns">
          <br>
          <div class="large-6 columns">
            <div id="rewardSubTitle">
              HOW TO PARTICIPATE
            </div>
            <br>
            <p>To win the grand prize, you must first win one of the weekly challenges! </p>
            <p>Every week, our Wrangler teams are on the lookout for those who find the true adventurer within. Take our weekly challenge , and share your adventure with us on Instagram. The further you go on the open road, the better your chance. We’re looking for the most stunning, daring and creative photos.</p>
            <div id="winners">4 CHALLENGES, 4 WEEKLY WINNERS.<br>TIME TO GET CREATIVE!</div>
            <br><br>
            <div id="terms">* Terms &#38; Conditions apply.</div>
          </div>
          <div class="large-6 columns">
            <img src="../assets/img/productImg.png">
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="line"></div>
      <br>
    </div>
 
  <?php snippet('footer') ?>
    
    <script src="../assets/js/vendor/jquery.js"></script>
    <script src="../assets/js/foundation.min.js"></script>
    <script src="../assets/js/vendor/modernizr.js"></script>

    <script type="text/javascript" src="../assets/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="../assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <script src="../assets/js/vendor/modernizr.js"></script>
    <script>
      $(document).foundation();


      $( document ).ready(function() 
      {
        if (jQuery("HTML").hasClass("ie8-custom")) {
        for (var c = 1; c <= 12; c++) {
            jQuery('.small-' + c + '[class*="medium"]').removeClass("small-" + c);
            //Perform any other column-specific adjustments your design may require here
        }
        jQuery('.show-for-small').remove();
        jQuery('.hide-for-small').removeClass('hide-for-small');
        jQuery('.top-bar-section UL').css({ width: "inherit" });
        jQuery('.top-bar-section UL LI').css({ float: "left" });
        jQuery('.top-bar').css({ height: "inherit" });
        };
      });
    </script>
  </body>
</html>

