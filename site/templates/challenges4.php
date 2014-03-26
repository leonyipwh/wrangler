<?php 
  $lang = c::get('lang.current');
?>

<?php snippet('header') ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_HK/all.js#xfbml=1&appId=270330759680309";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <?php snippet('popup') ?>

    <div id="upperContainer">
      <div class="row">

          <div class="show-for-large-up">

            <div id="" class="challenge4Container challengeContainer">
              <div class="large-9 columns">
                <br><br>
                <div class="whiteLine"></div>
                <div class="bkSubTitle margintop-20">
                  <?php echo html($page->currentchallenge()) ?>
                </div>
                <br>
                <div class="bigC4_click">   
                  <ul class="orbit-content" data-orbit>
                    <li data-orbit-slide="1">
                      <a data-orbit-link="2">
                        <img src="../content/0204-challenges4/bigC4_<?php echo $lang; ?>.jpg"/> 
                      </a>
                    </li>
                    <li data-orbit-slide="2">
                      <!-- <img src="img/bigC1_click.jpg"/> -->
                      <div class="c1Img">
                        <div class="popUpBtn" onclick="showPopUp()">&nbsp;</div>
                        <a class="facebookBtn" href="https://www.facebook.com/wranglerap" target="_black">&nbsp;</a>
                        <a class="instagramBtn" href="http://instagram.com/wrangler_asiapacific" target="_black">&nbsp;</a>
                        <div class="backToOrbit1">
                          <a data-orbit-link="1">< <?php echo html($page->backtoseechallenge()) ?></a>
                        <div>
                      </div>
                    </li>
                  </ul>
                </div>
                
                <br>
                <div class="whiteLine"></div>
                <br>
              </div>
              <div class="large-3 columns">
                <br><br>
                <div class="whiteLine"></div>
                <div class="bkSmallSubTitle margintop-20">
                  <?php echo html($page->allchallenge()) ?>
                </div>
                <br>
                <div class="challengesThumb">
                  <div class="challenge1Thumb"><a href="challenges1.php"><img src="../assets/img/challenge1.jpg" /></a></div>
                  <div class="challenge2Thumb"><a href="challenges2.php"><img src="../assets/img/challenge2.jpg" /></a></div>
                  <div class="challenge3Thumb"><a href="challenges3.php"><img src="../assets/img/challenge3.jpg" /></a></div>
                  <div class="challenge4Thumb"><a href="challenges4.php"><img src="../assets/img/challenge4.jpg" /></a></div>
                </div>
                <br>
                <div class="whiteLine"></div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <!-- mobile -->

        <div class="hide-for-large-up">

          <div id="" class="challenge1Container challengeContainer">
            <div class="challenge1Large">
              <div class="row">
                <ul data-orbit>
                  <li data-orbit-slide="1">
                      <a data-orbit-link="2">
                        <img src="../content/0204-challenges4/bigC4_<?php echo $lang; ?>.jpg"/>  
                      </a>
                  </li>
                  <li data-orbit-slide="2">
                    <!-- <a data-orbit-link="headline-1"></a> -->
                      <img src="../assets/img/bigC1_click_mobile.jpg">
                      <div class="popUpText_mobile">
                        <span class="hide-for-small"><?php echo html($page->popupmsg1()) ?> <a href="http://www.facebook.com">Facebook page</a>! Don’t forget to tag it #WranglerSunchaser.</span> (<a onclick="showPopUp()">Don't have Instagram?</a>)
                      </div>
                      <div class="backToOrbit1_mobile">
                      <a data-orbit-link="1">< <?php echo html($page->backtoseechallenge()) ?></a>
                    <div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="challengesMobileThumb row">
              <div id="" class="challenge1Thumb small-3 columns"><a href="challenges_hk.php"><img src="img/challenge1.jpg" /></a></div>
              <div id="" class="challenge2Thumb small-3 columns"><a href="challenges2_hk.php"><img src="img/challenge2.jpg" /></a></div>
              <div id="" class="challenge3Thumb small-3 columns"><a href="challenges3_hk.php"><img src="img/challenge3.jpg" /></a></div>
              <div id="" class="challenge4Thumb small-3 columns"><a href="challenges4_hk.php"><img src="img/challenge4.jpg" /></a></div>
            </div>
          </div>

            <br>
            <div class="whiteLine"></div>
            <br>
         
          </div>
        
        <!-- end mobile -->

        </div>

      </div>

    </div>

    <div class="reminderBox">
      <div class="row ">
        <div class=" large-12 columns">
          <p>
            <img src="img/reminderIcon.png">
            &nbsp;&nbsp;
            <span class="reminderText"><?php echo html($page->remindertext()) ?></span>
          <p>
        </div>
      </div>
    </div>

    <div id="lowerContainer">

      <br>

      <div class="row">
        <div class="large-12 columns">
          <br>
          <div class="solidLine"></div>
          <div class="whatYouCanWin margintop-20">
            <?php echo html($page->whatyoucanwin()) ?>
          </div>
          <br>
          <div class="large-6 columns">
            <a id="prizePhoto" href="../assets/img/prizeImg4.png"><img src="../assets/img/prizeImg4.jpg"></a>
          </div>
          <div class="large-6 columns">
            <h2 id="rewardTitle"><?php echo html($page->rewardtitle()) ?></h2>
            <br>
            <div id="rewardContent">
              <p><img id="icons" src="../content/0204-challenges4/icons_<?php echo $lang; ?>.png"></p>
              <p><?php echo html($page->rewardcontent()) ?></p>
              
              <br>

              <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

            </div>
          </div>
          <div class="large-12 columns">
            <br>
            <div class="solidLine"></div>
          </div>
        </div>
      </div>
    </div>

    <?php snippet('footer') ?>

    <script src="../assets/js/vendor/jquery.js"></script>
    <script src="../assets/js/foundation.min.js"></script>
    <script src="../assets/js/vendor/modernizr.js"></script>
    <script src="../assets/js/rem.min.js"></script>

    <script type="text/javascript" src="../assets/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="../assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>


    <script>
      $(document).foundation({
        orbit: 
        {
          animation: 'slide', // Sets the type of animation used for transitioning between slides, can also be 'fade'
          timer_speed: 10000, // Sets the amount of time in milliseconds before transitioning a slide
          pause_on_hover: true, // Pauses on the current slide while hovering
          resume_on_mouseout: false, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
          next_on_click: false, // Advance to next slide on click
          animation_speed: 500, // Sets the amount of time in milliseconds the transition between slides will last
          stack_on_small: false,
          navigation_arrows: false,
          slide_number: false,
          slide_number_text: 'of',
          container_class: 'orbit-container',
          stack_on_small_class: 'orbit-stack-on-small',
          next_class: 'orbit-next', // Class name given to the next button
          prev_class: 'orbit-prev', // Class name given to the previous button
          timer_container_class: 'orbit-timer', // Class name given to the timer
          timer_paused_class: 'paused', // Class name given to the paused button
          timer_progress_class: 'orbit-progress', // Class name given to the progress bar
          slides_container_class: 'orbit-slides-container', // Class name given to the 
          bullets_container_class: 'orbit-bullets',
          slide_selector: 'li', // Default is '*' which selects all children under the container
          bullets_active_class: 'active', // Class name given to the active bullet
          slide_number_class: 'orbit-slide-number', // Class name given to the slide number
          caption_class: 'orbit-caption', // Class name given to the caption
          active_slide_class: 'active', // Class name given to the active slide
          orbit_transition_class: 'orbit-transitioning',
          bullets: false, // Does the slider have bullets visible?
          circular: true, // Does the slider should go to the first slide after showing the last?
          timer: false, // Does the slider have a timer visible?
          variable_height: false, // Does the slider have variable height content?
          swipe: false
          
        }
      });

      $( document ).ready(function() 
      {

        $("#prizePhoto").fancybox({
          'overlayShow' : false,
          'transitionIn'  : 'elastic',
          'transitionOut' : 'elastic'
        });
      });

      function showPopUp()
      {
        $("#popUp").show();
      }

      function closePopUp()
      {
        $("#popUp").hide();
      }


    </script>
  </body>
</html>
