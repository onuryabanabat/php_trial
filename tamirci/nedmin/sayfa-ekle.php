<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>

<head>
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
</head>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SAYFA EKLİYORSUNUZ</h1>



                <?php 

                if ($_GET['durum']=="ok") {?>

                    <h1 style="color: green; "class="page-subhead-line">Sayfa başarıyla eklendi... </h1>

                    <?php
                }
                elseif ($_GET['durum']=="no") {?>

                    <h1 style="color: red;" class="page-subhead-line">Sayfa eklenemedi. </h1>

                    <?php
                }
                else{?>

                    <h1 class="page-subhead-line">Sitenize sayfa ekliyorsunuz...</h1>

                    <?php 
                }
                ?>







            </div>
        </div>


        <form action="netting/islem.php" method="POST">

            <div class="form-group col-md-12">
                <div class="form-group col-md-3">
                    <input class="btn btn-success" type="submit" name="sayfakaydet" value="Sayfa Kaydet">
                </div>                 
            </div>

            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <label>Sayfa Adı </label>
                    <input class="form-control" type="text" name="sayfa_ad" placeholder="Sayfa Adı Giriniz">
                </div> 
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-12">
                    <label>Sayfa İçerik </label>
                    <textarea class="ckeditor" name="sayfa_icerik"></textarea>
                </div> 
            </div>

            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <label>Sayfa Sıra </label>
                    <input class="form-control" type="text" name="sayfa_sira" placeholder="Sayfa Sırasını Giriniz">
                </div> 
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <label>Ana Sayfada Göster</label>
                    <select name="sayfa_anasayfa"class="form-control">

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