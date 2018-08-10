<?php 

include 'nedmin/netting/baglan.php';

$ayarsor=mysql_query("select * from ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsor);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $ayarcek['ayar_title']; ?></title>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
  <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
  <meta name="author" content="ONUR YABANABAT">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
  <script src="js/jquery-1.6.3.min.js"></script>
  <script src="js/cufon-yui.js"></script>
  <script src="js/cufon-replace.js"></script>
  <!-- <script src="js/NewsGoth_BT_400.font.js"></script> -->
  <script src="js/FF-cash.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/tms-0.3.js"></script>
  <script src="js/tms_presets.js"></script>
  <script src="js/easyTooltip.js"></script>
  
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
  <div class="extra">
    <div class="main">
      <!--==============================header=================================-->
      <header>
        <div class="indent">
          <div class="row-top">
            <div class="wrapper">



              <img style="margin-top: 30px; margin-left: 30px;" src="<?php echo $ayarcek['ayar_logo'] ?>">


              <strong class="support"><?php echo $ayarcek['ayar_telefon']; ?></strong> </div>
            </div>



            <nav>
              <ul class="menu">

                <li><a class="active" href="index.html">Home</a></li>


                <?php


                $menusor=mysql_query("select * from menuler");
                $menusay=mysql_num_rows($menusor);

                $say=0;

                while($menucek=mysql_fetch_assoc($menusor)) {$say++;?>

                  <li class="<?php
                  
                  if($menusay==$say)

                  {

                    echo "last";
                  }

                  ?>"><a href="<?php echo $menucek['menu_link'];?>" target="blank"><?php echo $menucek['menu_ad']?> </a></li>

                  <?php

                }

                ?>


              </ul>
            </nav>



          </div>




          <div class="wrapper">
            <div class="slider">
              <ul class="items">

                <?php


                $slidersor=mysql_query("select * from slider order by slider_sira desc");


                while($slidercek=mysql_fetch_assoc($slidersor)) {?>


                  <li>

                    <img src="nedmin/<?php echo $slidercek['slider_resimyol']; ?>" alt="<?php echo $slidercek['slider_ad']; ?>">

                  </li>

                <?php  }?>


              </ul>
            </div>
            <a class="prev">prev</a> <a class="next">next</a>
            <div class="banner1-bg"></div>
            <div class="banner-1"></div>
          </div>
        </header>