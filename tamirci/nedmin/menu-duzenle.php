<?php 
include 'header.php';
include 'sidebar.php'; 


$menu_id=$_GET['menu_id'];

$menusor=mysql_query("select * from menuler where menu_id='$menu_id'");
$menucek=mysql_fetch_assoc($menusor);
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MENÜ DÜZENLİYORSUNUZ</h1>

                <?php 

                if ($_GET['durum']=="ok") {?>

                    <h1 style="color: green; "class="page-subhead-line">Menü başarıyla düzenlendi... </h1>

                    <?php
                }
                elseif ($_GET['durum']=="no") {?>

                    <h1 style="color: red;" class="page-subhead-line">Menü düzenlenemedi. </h1>

                    <?php
                }
                else{?>

                    <h1 class="page-subhead-line">Menü düzenliyorsunuz...</h1>

                    <?php 
                }
                ?>


            </div>

            
        </div>


        <form action="netting/islem.php" method="POST">

            <div class="form-group col-md-12">
                <div class="form-group col-md-3">
                    <input class="btn btn-success" type="submit" name="menuduzenle" value="Menü Kaydet">
                </div>                 
            </div>

            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id'] ?>">
                    <label>Menü Adı </label>
                    <input class="form-control" type="text" name="menu_ad" value="<?php echo $menucek['menu_ad']?>">
                </div> 
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                    <label>Menü Link </label>
                    <input class="form-control" type="text" name="menu_link" value="<?php echo $menucek['menu_link']?>">
                </div> 
            </div>





        </form>


    </div>
    <!-- /. PAGE INNER  -->
</div>





</body>
</html>


<?php include 'footer.php'; ?>