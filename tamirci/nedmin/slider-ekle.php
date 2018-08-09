<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SLIDER EKLİYORSUNUZ</h1>



                <?php 

                if ($_GET['durum']=="ok") {?>

                    <h1 style="color: green; "class="page-subhead-line">Slider başarıyla eklendi... </h1>

                    <?php
                }
                elseif ($_GET['durum']=="no") {?>

                    <h1 style="color: red;" class="page-subhead-line">Slider eklenemedi. </h1>

                    <?php
                }
                else{?>

                    <h1 class="page-subhead-line">Sitenize slider ekliyorsunuz...</h1>

                    <?php 
                }
                ?>




            </div>
        </div>


        <form action="netting/islem.php" method="POST" enctype="multipart/form-data">

            <div class="form-group col-md-12">
                <div class="form-group col-md-3">
                    <input class="btn btn-success" type="submit" name="sliderekle" value="Slider Kaydet">
                </div>                 
            </div>


           <div class="form-group col-md-12">
                        <label class="control-label col-lg-4">Slider Resim</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new col-md-4">Resim Seç</span>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="slidegorsel">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                    </div>



            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <label>Slider Ad </label>
                    <input class="form-control" type="text" name="slider_ad" placeholder="Slider Adı Giriniz">
                </div> 
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <label>Slider Url </label>
                    <input class="form-control" type="text" name="slider_url" placeholder="Slider yönlendirmek için link giriniz.">
                </div> 
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-2">
                    <label>Slider Sıra </label>
                    <input class="form-control" type="number" name="slider_sira" placeholder="Slider sırasını giriniz.">
                </div> 
            </div>




        </form>


    </div>
    <!-- /. PAGE INNER  -->
</div>





</body>
</html>


<?php include 'footer.php'; ?>