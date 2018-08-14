<?php include 'header.php';

$sayfa_id=$_GET['sayfa_id'];
$sayfasor=mysql_query("select * from sayfalar where sayfa_id='$sayfa_id'");
$sayfacek=mysql_fetch_assoc($sayfasor) 
?>
<!--==============================aside================================-->
<aside>

  <div class="column-6">
    <div class="box">
      <div class="aligncenter">
        <h4><?php echo $sayfacek['sayfa_ad']; ?></h4>
      </div>
      <div class="box-bg maxheight">
        <div class="padding">
          <p><?php echo $sayfacek['sayfa_icerik']; ?></p>
        </div>
      </div>
    </div>
  </div>



</div>
</aside>
<!--==============================content================================-->
<section id="content">
  <div class="wrapper">


  </div>
  <div class="block"></div>
</section>
</div>
</div>
<!--==============================footer=================================-->

<script>Cufon.now();</script>
<script>
  $(window).load(function () {
    $('.slider')._TMS({
      duration: 800,
      easing: 'easeOutQuart',
      preset: 'simpleFade',
      slideshow: 7000,
      banners: false,
      pauseOnHover: true,
      waitBannerAnimation: false,
      prevBu: '.prev',
      nextBu: '.next'
    });
  });
</script>
</body>
</html>

<?php include 'footer.php' ?>