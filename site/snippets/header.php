<?php 
  $lang = c::get('lang.current');
?>

<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<html class="no-js" lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wrangler</title>
    <link rel="stylesheet" href="../assets/css/foundation.css" />
    <link rel="stylesheet" href="../assets/css/wrangler.css" />
    <link rel="stylesheet" type="text/css" href="../assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'/>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    
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
    <nav id="topbar" class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <a class="logo" href="index.php" onMouseOver="changeToTag()" onMouseOut="changeToLogo()">
            <img id="unactiveLogo" src="../assets/img/logo.png"/>
            <!-- <img id="activeLogo" src="img/logo_active.png"/> -->
          </a>
        </li>
        <li class="toggle-topbar menu-icon">
          <a href="#">Menu</a>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right topbarRight">
          <li class="has-dropdown">
            <a href="<?php echo $page->url($lang) ?>">

              <?php 
                if($lang=="hken")
                  {
                    echo "Hong Kong ( Eng )";
                  } 
                else if($lang=="id")
                  {
                    echo "Indonesia";
                  }
                else if($lang=="zh")
                  {
                    echo "China";
                  }
                else if($lang=="au")
                  {
                    echo "Australia";
                  }
                else if($lang=="mm")
                  {
                    echo "Myanmar";
                  }
                else if($lang=="ph")
                  {
                    echo "Philippines";
                  }
                else if($lang=="za")
                  {
                    echo "South Africa";
                  }
                else if($lang=="th")
                  {
                    echo "Thailand";
                  }
               ?>
            </a>
            
            <ul class="dropdown">
              <?php foreach(c::get('lang.available') as $langSelection): ?>
              <li>
                <a href="<?php echo $page->url($langSelection) ?>">
                  <?php 
                    if($langSelection == 'hken' && $langSelection!=$lang)
                    {
                      echo "Hong Kong ( Eng )";
                    }
                    else if($langSelection == 'au' && $langSelection!=$lang)
                    {
                      echo "Australia";
                    }
                    else if($langSelection == 'zh' && $langSelection!=$lang)
                    {
                      echo "China";
                    }
                    else if($langSelection == 'id' && $langSelection!=$lang)
                    {
                      echo "Indonesia";
                    }
                    else if($langSelection == 'mm' && $langSelection!=$lang)
                    {
                      echo "Myanmar";
                    }
                    else if($langSelection == 'ph' && $langSelection!=$lang)
                    {
                      echo "Philippines";
                    }
                    else if($langSelection == 'za' && $langSelection!=$lang)
                    {
                      echo "South Africa";
                    }
                    else if($langSelection == 'th' && $langSelection!=$lang)
                    {
                      echo "Thailand";
                    }
                  ?>
                </a>
              </li>
              <?php endforeach ?>
              <!-- <li><a href="index_aus.php">Australia ( Eng )</a></li>
              <li><a href="#">Hong Kong ( 繁體字 )</a></li>
              <li><a href="#">China ( 简体字 )</a></li>
              <li><a href="#">Thailand ( Eng )</a></li> -->
            </ul>
          </li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left topbarLeft">
          <li class="topbarli">&nbsp;&nbsp;&nbsp;</li>
          <li class="topbarli"><a class="topbarBtn" href="index.php"><?php echo l::get('home') ?></a></li>
          <li class="topbarli"><a class="topbarBtn" href="challenges1.php"><?php echo l::get('challenges') ?></a></li>
          <li class="topbarli"><a class="topbarBtn" href="prizes.php"><?php echo l::get('prizes') ?></a></li>
        </ul>
      </section>
    </nav>
  </div>

  <!-- End Navigation -->

  <script type="text/javascript">
  function changeToTag()
  {
    $(".logo").find('img').attr('src', '../assets/img/logo_active.png');
  }

  function changeToLogo()
  {
    $(".logo").find('img').attr('src', '../assets/img/logo.png');
  }

  </script>
