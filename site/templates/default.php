<?php 
  $campaignLogo = $page->images()->find('campaignLogo.png');
?>

<?php 
	$lang = c::get('lang.current');
?>

<?php snippet('header') ?>


 <!-- Desktop Slider -->
    
    <div id="featured" data-0="top:75px;" data-end="top:75px;"></div>
    <div id="leadingContent" class="large-12" data-0="top:95px;" data-500="top:-550px;">

      <div id="sunchaseLogo"><img src="../content/01-index/campaignLogo_<?php echo $lang; ?>.png"></div>
      <br>

      <div id="scrollDown"><?php echo html($page->scroll()) ?></div>
      <div id="scrollDownArrow"><img src="../assets/img/scrollDownArrow.png"></div>
      <br><br>
      <div class="leadingText small-11 small-centered columns"><?php echo html($page->leadingtext()) ?></div>
      <div id="currentChallengeBtn" class="">
        <a href="challenges1.php"><?php echo html($page->currentchallenge()) ?> ></a>
      </div>
    </div>

    <!-- End Desktop Slider -->
      <!--[if IE 8]>
      <div style="height:300px">&nbsp;</div>
    <![endif]--> 
        
    <br>
    <br>

    <div id="indexLowerContainer" class="hide-for-small" data-0="top:520px;" data-500="top:520px;" data-1600="top:-270px;">

     	<div class="row">
    		<div class="large-12 columns">
				<div id="timeline" class="show-for-large-only">
					<img src="../assets/img/timeline.png">
				</div>
			</div>
      	</div>

		<br>
		<br>
		<br>
      
		<div class="line show-for-large"></div>
     
		<div class="row margintop-20">
        	<div class="large-12 columns">
				<div class="row">
     
		        	<!-- Thumbnails -->
		     
		            <div class="large-6 columns">
						<div class="subTitle">
		                	<?php echo html($page->howtoparticipate()) ?>
						</div>
						<br>
						<a href="challenges1.php">
							<img src="../content/01-index/howTo_<?php echo $lang; ?>.png" />
						</a>
		            </div>
		     
		            <div class="large-6 columns show-for-large-up">
						<div class="row">
							<div class="subTitle">
								<?php echo html($page->grandprize()) ?>
							</div>
		                	<br>
		                	<a href="prizes.php">
		                  		<img src="../assets/img/grandPrize1.jpg" />
		                	</a>
		              	</div>
		              	<br>
		              	<div class="row">
		                	<div class="subTitle">
		                  		<?php echo html($page->followus()) ?>
		                	</div>
		                	<br>
		                	<?php if($lang=="zh")
		                  	{
		                    	echo "
		                    		<a href='http://weibo.com/wranglerchina'><img src='../content/01-index/weiboImg.jpg'/></a>";
		                  	} 
		                  	else
		                  	{
		                  		echo "
		                  		<a href=".html($page->facebooklink())."target='_blank'>
		                  			<img src='../assets/img/followUs_fb.jpg' />
			                	</a>
		                		<a href=".html($page->instagramlink())." target='_blank'>
		                  			<img src='../assets/img/followUs_insta.jpg' />
		                		</a>";
		                  	}
		                	
		                	

		                	?>
		              	</div>
		        	</div>
     
        <!-- End Thumbnails -->
     
          		</div>
        	</div>
    	</div>
      
		<br>
		<br>

		<div class="line show-for-large-up"></div>

		<br>
		<br>

		<div class="row ">
        	<div class="large-12 columns">
				<div class="highlights"><span class="bold"><?php echo html($page->highlightsfrom()) ?></span> #WranglerSunchaser</div>
			</div>
		</div>
      
    	<br>

		<div class="row">
			<div class="large-12 columns">
				<ul class="highlightsPhoto clearing-thumbs" data-clearing>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/1"/></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/2"></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/3"></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/4"></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/5"></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/6"></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/7"></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/8"></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/9"></a></li>
					<li><a href=""><img src="http://lorempixel.com/87/87/city/10"></a></li>
        		</ul>
        	</div>
      	</div>

		<br>
		<br>

		<div class="line show-for-large-up"></div>

		<br>
		<br>

		<?php snippet('footer') ?>

		</div>


    <!-- mobile -->

    <div id="indexLowerContainer" class="show-for-small" data-0="top:520px;" data-500="top:520px;" data-1600="top:-630px;">

		<div class="row">
			<div class="large-12 columns">
				<div id="timeline" class="show-for-large-only">
					<img src="../assets/img/timeline.png">
				</div>
			</div>
		</div>

		<br>
		<br>
		<br>
      
		<div class="line show-for-large"></div>
     
		<div class="row margintop-20">
			<div class="large-12 columns">
				<div class="row">
    
     
					<div class="large-6 columns">
						<div class="subTitle">
							<?php echo html($page->howtoparticipate()) ?>
						</div>
						<br>
						<a href="challenges1.php">
							<img src="../content/01-index/howTo_<?php echo $lang; ?>.png" />
						</a>

            		</div>
     


					<div class="large-6 columns">
						<br>
						<div class="subTitle">
							<?php echo html($page->grandprize()) ?>
						</div>
						<br>
						<a href="prizes.php">
							<img src="../assets/img/grandPrize.jpg" />
						</a>
					</div>
     
        	<!-- End Thumbnails -->
     
				</div>
			</div>
		</div>
      
		<br>

		<div class="row ">
        	<div class="large-12 columns">
        		<div class="highlights"><span class="bold"><?php echo html($page->highlightsfrom()) ?></span> #WranglerSunchaser</div>
        	</div>
      	</div>
      
      	<br>

     	<div class="row">
	        <div class="large-12 columns">
				<ul class="highlightsPhoto clearing-thumbs" data-clearing>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/1"/></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/2"></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/3"></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/4"></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/5"></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/6"></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/7"></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/8"></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/9"></a></li>
	            <li><a href=""><img src="http://lorempixel.com/87/87/city/10"></a></li>
	          </ul>
	        </div>
	    </div>

		<br>
		<br>

		<div class="line show-for-large-up"></div>
		<br>
		<br>

		<?php snippet('footer') ?>

		</div>


		</div>

	</div>

    <script src="../assets/js/vendor/jquery.js"></script>
    <script src="../assets/js/foundation.min.js"></script>
    <script src="../assets/js/vendor/modernizr.js"></script>
    <script src="../assets/js/skrollr.min.js"></script>
    <script src="../assets/js/rem.min.js"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="../assets/js/skrollr.ie.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="../assets/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="../assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <script>
		$(document).foundation();

		$(function() 
		{
		_skrollr = skrollr.init();
		});

		var d = new Date();
		var month = d.getMonth()+1;
		var day = d.getDate();

		var output = d.getFullYear() + '/' +
		(month<10 ? '0' : '') + month + '/' +
		(day<10 ? '0' : '') + day;

		targetDate = "2014/03/07";

		if (output==targetDate) 
		{
		  console.log(output);

		  $("#timeline").animate({
		    marginLeft:'+=100px'
		  },5000);
		};

    </script>
  </body>
</html>