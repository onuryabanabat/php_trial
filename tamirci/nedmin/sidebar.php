
<?php session_start(); ?>

<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">

                        Hoşgeldin <?php echo $_SESSION['admin_kadi']; ?>
                        
                        <br />

                        <small></small>
                    </div>
                    </div
                    >
                </li>
                <li>
                    <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
                </li>
                <li>
                    <a href="ayarlar.php"><i class="fa fa-dashboard "></i>Ayarlar</a>
                </li>
                <li>
                    <a href="menuler.php"><i class="fa fa-dashboard "></i>Menüler</a>
                </li>
                  <li>
                    <a href="slider.php"><i class="fa fa-dashboard "></i>Slider</a>
                </li>
                <li>
                    <a href="sayfa-ekle.php"><i class="fa fa-dashboard "></i>Sayfa Ekle</a>
                </li>
            </ul>
        </div>
    </nav>