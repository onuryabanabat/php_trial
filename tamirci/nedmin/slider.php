
<?php 
session_start();


include 'header.php'; 


include 'sidebar.php'; 


?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SLIDER</h1>
                <h1 class="page-subhead-line">Sitenizdeki sliderları buradan yönetebilirsiniz. </h1>

            </div>
        </div>

        <div class="col-md-12">
         <a href="slider-ekle.php"> <button class="btn btn-success">Slider Ekle</button></a>
         <hr>
     </div>

     <div class="col-md-12">
       <!--    Hover Rows  -->
       <div class="panel panel-default">
        <div class="panel-heading">
            Ekli olan sliderlar
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Slider Adı</th>
                            <th>Slider Resmi</th>
                            <th>Slider Link</th>
                            <th>Slider Sıra</th>                            
                            <th style="width: 20px;"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                       <?php


                       $slidersor=mysql_query("select * from slider");


                       while($slidercek=mysql_fetch_assoc($slidersor)) {?>

                        <tr>
                            <td><?php echo $slidercek['slider_id']; ?></td>
                            <td><?php echo $slidercek['slider_ad']; ?></td>

                            <td>

                                <img width=200px; src="<?php echo $slidercek['slider_resimyol']; ?>" alt="Slider Resmi">

                            </td>


                            <td><?php echo $slidercek['slider_url']; ?></td>

                            <td>
                                <form method="POST" action="netting/islem.php">

                                    <input type="text" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>"></input> 

                                    <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id'];?>">

                                    
                                        <button class="btn btn-primary" type="submit" name="sliderguncelle"> Güncelle </button>
                                    
                                </form>
                            </td>


                            <td>

                                <a href="netting/islem.php?slider_id=<?php echo $slidercek['slider_id'];?>&slidersil=ok">


                                    <button class="btn btn-danger">Sil</button></a>

                                </td>

                            </tr>

                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End  Hover Rows  -->
</div>



</div>
<!-- /. PAGE INNER  -->
</div>






</body>
</html>


<?php include 'footer.php'; ?>