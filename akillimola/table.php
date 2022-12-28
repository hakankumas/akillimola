<?php
include("ak_vt_ayar.php");
 
$sorgu=$vt->prepare('SELECT personel.personel_ad, personel.personel_soyad, personel.cinsiyet, departman.departman_ad, personel.personel_d_t
FROM personel, departman
WHERE personel.departman_id=departman.departman_id');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.
 
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Title Page-->
    <title>Personel Bilgisi</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logos.png" alt="akilliMola" />
                            <span class="span"><a href="index.html"></a></span>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Personel Bilgisi</a>
                        </li>
                        <li>
                            <a href="tablo2.php">
                                <i class="fas fa-table"></i>Sağlık Verileri</a>
                        </li>
                        <li>
                            <a href="verigirisi.php">
                                <i class="fas fa-table"></i>Veri Giriş Paneli</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo; margin:auto">
                <a class="logo" href="index.php">
                    <img src="images/icon/logos.png" style="width:75px;height: 75px;margin:auto" alt="CoolAdmin" />
                    <span class="span"><a href="index.html"></a></span>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="table.php">
                                <i class="fas fa-table"></i>Personel Bilgisi</a>
                        </li>
                        <li class="active">
                            <a href="tablo2.php">
                                <i class="fas fa-table"></i>Sağlık Verileri</a>
                        </li>
                        <li class="active">
                            <a href="verigirisi.php">
                                <i class="fas fa-table"></i>Veri Giriş Paneli</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Ara" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>1 Yeni mesajınız var.</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Kemal Öztürk</h6>
                                                    <p>Bir fotoğraf gönderdi.</p>
                                                    <span class="time">3 dakika önce</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Mustafa Ölmez</h6>
                                                    <p>İstediğiniz raporları gönderdim.</p>
                                                    <span class="time">Dün</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">Tüm mesajları görüntüle</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>1 Yeni mailiniz var.</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Yeni kontrol paneli hakkında toplantı...</p>
                                                    <span>Kemal Öztürk, 3 dakika önce</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Yeni kontrol paneli hakkında toplantı...</p>
                                                    <span>Mehmet Yılmaz, Dün</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Yeni kontrol paneli hakkında toplantı...</p>
                                                    <span>Mustafa Ölmez, Nisan 12, 2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">Tüm mailleri görüntüle</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>3 Yeni bildiriminiz var.</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Bir e-posta bildirimi aldınız.</p>
                                                    <span class="date">Nisan 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Hesabınız engellendi.</p>
                                                    <span class="date">Nisan 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Yeni bir dosyan var.</p>
                                                    <span class="date">Nisan 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">Tüm Bildirimler</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/manager.png" alt="Hakan KUMAŞ" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Hakan KUMAŞ</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/manager.png" alt="Hakan KUMAŞ" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Hakan KUMAŞ</a>
                                                    </h5>
                                                    <span class="email">hakankumas@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="login.php">
                                                    <i class="zmdi zmdi-power"></i>Çıkış</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="container">
	                        <div class="row justify-content-center">
		                        <div class="col">
		                            <table class="table table-striped">
			                            <tr>
			                            <td class="bg-info font-weight-bold">Ad</td>
			                            <td class="bg-info font-weight-bold">Soyad</td>
			                            <td class="bg-info font-weight-bold">Cinsiyet</td>
			                            <td class="bg-info font-weight-bold">Departman</td>
                                        <td class="bg-info font-weight-bold">Doğum Tarihi</td>

			                            </tr>
			 
			                            <?php
			                            foreach($personellist as $person){?>
			 
			 	                            <tr>
			 	                            <td class="bg-active"><?= $person->personel_ad ?></td>
				                            <td class="bg-active"><?= $person->personel_soyad ?></td>
				                            <td class="bg-active"><?= $person->cinsiyet ?></td>
                                            <td class="bg-active"><?= $person->departman_ad ?></td>
			 	                            <td class="bg-active"><?= $person->personel_d_t ?></td>
			 	                            <td class="bg-active"><a href="#" class="btn btn-danger">Sil</a></td>
			 	                            <td class="bg-active"><a href="#" class="btn btn-primary">Güncelle</a></td>
			                                </tr>
				 
			                            <?php } ?>
 
			                        </table>  
		                        </div>  
	                        </div>
                            </div>
	                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021 akilliMola. All rights reserved. Template by <a href="https://akillimola.com">akilliMola</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
