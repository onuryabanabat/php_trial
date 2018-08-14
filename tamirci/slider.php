
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