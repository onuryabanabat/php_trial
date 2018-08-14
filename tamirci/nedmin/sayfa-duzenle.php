<?php include 'header.php'; 

include 'sidebar.php';


$sayfa_id=$_GET['sayfa_id'];

$sayfasor=mysql_query("select * from sayfalar where sayfa_id='$sayfa_id'");
$sayfacek=mysql_fetch_assoc($sayfasor);


?>

<head>
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
</head>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SAYFA DÜZENLİYORSUNUZ</h1>



                <?php 

                if ($_GET['durum']=="ok") {?>

                    <h1 style="color: green; "class="page-subhead-line">Sayfa başarıyla düzenlendi... </h1>

                    <?php
                }
                elseif ($_GET['durum']=="no") {?>

                    <h1 style="color: red;" class="page-subhead-line">Sayfa düzenlenemedi. </h1>

                    <?php
                }
                else{?>

                    <h1 class="page-subhead-line">Sayfanızı düzenleyip kaydedin...</h1>

                    <?php 
                }
                ?>


            </div>
        </div>


        <form action="netting/islem.php" method="POST">


            <div class="form-group col-md-12">
                <div class="form-group col-md-3">
                    <input class="btn btn-success" type="submit" name="sayfaduzenle" value="Sayfa Duzenle">
                </div>                 
            </div>

            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <label>Sayfa Adı </label>
                    <input class="form-control" type="text" name="sayfa_ad" value="<?php echo $sayfacek['sayfa_ad']; ?>">
                </div> 
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-12">
                    <label>Sayfa İçerik </label>
                    <textarea class="ckeditor" name="sayfa_icerik"><?php echo $sayfacek['sayfa_icerik']; ?></textarea>
                </div> 
            </div>

            <div class="form-group col-md-12">

                <input type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id']; ?>">
                <div class="form-group col-md-6">
                    <label>Sayfa Sıra </label>
                    <input class="form-control" type="text" name="sayfa_sira" value="<?php echo $sayfacek['sayfa_sira']; ?>">
                </div> 
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <label>Ana Sayfada Göster</label>
                    <select name="sayfa_anasayfa"class="form-control">



                        <?php 

                        $durum=$sayfacek['sayfa_anasayfa'];

                        if ($durum=='0') {?>

                            <option value="0">Hayır</option>
                            <option value="1">Evet</option>
                        <?php }
                        else  {?>
                           <option value="1">Evet</option>
                           <option value="0">Hayır</option>
                       
                       <?php  } ?>



 
                         

                        <option value="0">Hayır</option>
                        <option value="1">Evet</option>

                    </select>
                </div>

            </div>
        </form>


    </div>
    <!-- /. PAGE INNER  -->
</div>





</body>
</html>


<?php include 'footer.php'; ?>