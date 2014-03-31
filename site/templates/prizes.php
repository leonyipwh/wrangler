<?php 
  $lang = c::get('lang.current');
?>

<?php snippet('header') ?>

    <div id="reward_lowerContainer">
      <br>
      <div class="row">
        <div class="large-12 columns">
          <br>
          <br class="hide-for-small">
          <br class="hide-for-small">
          <span class="hide-for-small"><img src="../content/03-prizes/prizes_<?php echo $lang; ?>.png"/></span>
          <span class="show-for-small-only"><img src="../content/03-prizes/prizesMobile_<?php echo $lang; ?>.png"/></span>
          <br class="hide-for-small">
          <br class="hide-for-small">
          <br>
          <div id="rewardBannerContent">
            <span id="allWeeklyWinners"><?php echo html($page->allweeklywinners()) ?></span>
            <br>
            <br>
            <span class="boldAndUnderline"><?php echo html($page->underlintext()) ?></span>
            <br>
            <br>
            <span><?php echo html($page->smalltext()) ?></span>
            <br>
            <br>
            <span class="floatRight"><?php echo html($page->termsapply()) ?></span>
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
              <?php echo html($page->howtoparticipate()) ?>
            </div>
            <br>
            <p><?php echo html($page->para1()) ?></p>
            <p><?php echo html($page->para2()) ?></p>
            <div id="winners"><?php echo html($page->challengesandwinner()) ?><br><?php echo html($page->timetogetcreative()) ?></div>
            <br><br>
            <div id="terms"><?php echo html($page->termsapply()) ?></div>
          </div>
          <div class="large-6 columns">
            <img src="../content/03-prizes/productImg_hken.png"/>
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

