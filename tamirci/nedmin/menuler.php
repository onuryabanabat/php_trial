
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
                <h1 class="page-head-line">MENÜLER</h1>
                <h1 class="page-subhead-line">Sitenizde menüleri bu sayfadan yönetebilirsiniz. </h1>

            </div>
        </div>

        <div class="col-md-12">
         <a href="menu-ekle.php"> <button class="btn btn-success">Menü Ekle</button></a>
         <hr>
     </div>

     <div class="col-md-12">
       <!--    Hover Rows  -->
       <div class="panel panel-default">
        <div class="panel-heading">
            Ekli olan menüler
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th style="width: 400px;">Menü adı</th>
                            <th>Menü Link</th>
                            <th style="width: 20px;"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                       <?php


                       $menusor=mysql_query("select * from menuler");


                       while($menucek=mysql_fetch_assoc($menusor)) {?>

                        <tr>
                            <td><?php echo $menucek['menu_id']; ?></td>
                            <td><?php echo $menucek['menu_ad']; ?></td>
                            <td><?php echo $menucek['menu_link']; ?></td>
                            <td><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                            <td>

                                <a href="netting/islem.php?menu_id=<?php echo $menucek['menu_id'];?>&menusil=ok">


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