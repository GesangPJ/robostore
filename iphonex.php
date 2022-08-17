<?php
session_start();
include 'connector.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>RoboStore-iPhone X</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <?php include 'header.php'; ?>

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="laptops.html">Smartphones</a></li>
                        <li class="active">iPhone X</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="./img/IPX.png" alt="">
                        </div>



                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">



                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">iPhone X</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">Rp17.000.000<del class="product-old-price">Rp.17.499.000</del>
                            </h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>Visi Apple sejak awal adalah menciptakan iPhone yang sepenuhnya berisi layar. Yang begitu
                            menghanyutkan sehingga tak ada lagi batasan antara perangkat dan pengalaman. Dan begitu
                            cerdas sehingga dapat merespons dengan sekali sentuh, atau bahkan sekali pandang. Dengan
                            iPhone X, visi ini menjadi kenyataan. Selamat datang, masa depan.

                            Di iPhone X, layarnya adalah perangkatnya. Layar Super Retina 5,8 inci yang baru sempurna
                            dalam genggaman dan memukau pandangan. Layar dirancang dengan teknik dan teknologi baru
                            untuk mengikuti lekukan desain dengan presisi, bahkan ke sudut-sudut melengkung yang begitu
                            elegan. Desain yang sepenuhnya baru. Kaca terkuat yang pernah ada di ponsel pintar, baik
                            depan maupun belakang. Baja tahan karat sekelas peralatan bedah. Pengisian daya nirkabel.
                            Tahan air dan debu. Gerakan Intuitif, semua gerakan yang sudah tidak asing lagi membuat
                            navigasi terasa natural dan intuitif. Tanpa menekan tombol, tapi cukup dengan sekali usap
                            saja Anda akan kembali ke layar Home, dari mana pun. Kamera Ganda 12 MP. Seni fotografi jadi
                            lebih sederhana dengan dukungan prosesor A11 Bionic. Chip yang paling andal dan cerdas di
                            ponsel pintar, dengan mesin neural yang mampu menangani hingga 600 miliar operasi per detik.
                            Empat core efisiensi di CPU yang baru lebih cepat hingga 70 persen dibandingkan Fusion A10.
                        </p>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="laptop.html">Laptop</a></li>
                            <li><a href="gaming.html">Gaming</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Dskripsi Detail</a></li>
                            <li><a data-toggle="tab" href="#tab2">Spesifikasi</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p> <br>

                                            <b>Desain dan Layar Sepenuhnya Layar</b>
                                            <br>
                                            Layar Super Retina. Di iPhone X, layarnya adalah perangkatnya. Layar Super
                                            Retina 5,8 inci yang baru sempurna dalam genggaman dan memukau pandangan.
                                            Layar dirancang dengan teknik dan teknologi baru untuk mengikuti lekukan
                                            desain dengan presisi, bahkan ke sudut-sudut melengkung yang begitu elegan.
                                            Layar OLED pertama yang mengimbangi standar tinggi iPhone, dengan
                                            warna-warna akurat yang menakjubkan, hitam pekat, kecerahan tinggi, dan
                                            rasio kontras 1.000.000:1. Kamera TrueDepth, sebuah bidang kecil menampung
                                            sejumlah teknologi paling canggih yang pernah dirancang Apple, termasuk
                                            kamera dan sensor yang memungkinkan Face ID. Desain yang sepenuhnya baru.
                                            Kaca terkuat yang pernah ada di ponsel pintar, baik depan maupun belakang.
                                            Baja tahan karat sekelas peralatan bedah. Pengisian daya nirkabel. Tahan air
                                            dan debu. Gerakan Intuitif, semua gerakan yang sudah tidak asing lagi
                                            membuat navigasi terasa natural dan intuitif. Tanpa menekan tombol, tapi
                                            cukup dengan sekali usap saja Anda akan kembali ke layar Home, dari mana pun
                                            <br><br>
                                            <b>Face ID. Revolusi Identifikasi</b>
                                            <br>
                                            Kini wajah Anda adalah kata sandi Anda. Face ID adalah cara baru yang aman
                                            untuk membuka kunci dan mengautentikasi. Face ID dimungkinkan oleh kamera
                                            TrueDepth dan mudah disiapkan. Face ID memproyeksikan dan menganalisis lebih
                                            dari 30.000 titik tak terlihat untuk membuat peta wajah Anda dengan presisi
                                            mendalam.
                                            <br><br>
                                            <b>Kamera TrueDepth. Hadap Depan dan Andalah Fokusnya</b>
                                            <br>
                                            Buat foto selfie yang indah dengan objek depan yang tajam dan latar belakang
                                            yang dikaburkan secara artistik. Sebuah fitur baru di mode Potret,
                                            Pencahayaan Potret menghadirkan efek pencahayaan impresif berkualitas
                                            studio. Kamera TrueDepth menganalisis lebih dari 50 gerakan otot wajah untuk
                                            mencerminkan ekspresi Anda ke dalam 12 Animoji. Keluarkan versi panda atau
                                            robot dari diri Anda
                                            <br><br>
                                            <b>Kamera Ganda 12 MP. Seni fotografi jadi lebih sederhana</b>
                                            <br>
                                            Sensor 12 MP yang lebih besar dan lebih cepat. Filter warna baru. Piksel
                                            yang lebih dalam. Dan kamera telefoto baru dengan OIS. Kamera yang
                                            mendeteksi kedalaman dan pemetaan wajah dengan presisi menciptakan efek
                                            pencahayaan berkualitas studio yang menakjubkan. Kedua kamera belakang
                                            memiliki penstabilan gambar optik (OIS/Optical Image Stabilization) dan
                                            lensa cepat untuk foto dan video yang memukau, bahkan dalam kondisi kurang
                                            pencahayaan. Kamera wide-angle dan telefoto di iPhone X memungkinkan zoom
                                            optik, serta zoom digital hingga 10x untuk foto dan 6x untuk video.
                                            <br>
                                            <b>A11 Bionic - Kecerdasan Manusia Super</b>
                                            <br>
                                            Memperkenalkan A11 Bionic. Chip yang paling andal dan cerdas di ponsel
                                            pintar, dengan mesin neural yang mampu menangani hingga 600 miliar operasi
                                            per detik. Empat core efisiensi di CPU yang baru lebih cepat hingga 70
                                            persen dibandingkan Fusion A10. Dan dua core performa yang lebih cepat
                                            hingga 25 persen. Pembelajaran mesin memungkinkan Face ID beradaptasi dengan
                                            perubahan fisik pada penampilan Anda seiring dengan waktu. Pengontrol
                                            performa generasi kedua dan rancangan baterai khusus yang bertahan hingga 2
                                            jam lebih lama di antara pengisian daya dibandingkan iPhone 7. GPU tiga core
                                            baru rancangan Apple lebih cepat hingga 30 persen dibanding Fusion A10. A11
                                            Bionic adalah tenaga di balik pengalaman augmented reality yang luar biasa
                                            di game dan aplikasi.
                                            <br><br>
                                            <b>Pengisian Daya Nirkabel. Isi daya tanpa kabel Di dunia tanpa kabel</b>
                                            <br>
                                            Tanpa memerlukan kabel pengisian daya, iPhone X benar-benar dirancang untuk
                                            masa depan yang bebas kabel. Isi daya menggunakan stasiun dan alas pengisian
                                            daya nirkabel di banyak hotel, kafe, dan bandara di seluruh dunia.
                                            <br><br>
                                            <b>iOS 11 - iOS Revolusioner untuk iPhone Revolusioner.</b>
                                            <br>
                                            Ponsel yang sepenuhnya layar memerlukan OS yang sepenuhnya dirancang ulang
                                            dengan kemampuan dan gerakan baru. Kirim Animoji di Pesan. Sesuaikan Pusat
                                            Kontrol. Dan temukan musik baru bersama teman-teman di Apple Music. Nikmati
                                            berbagai aplikasi dan game AR yang begitu memukau di platform terbesar di
                                            dunia untuk augmented reality.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            Screen Size : 5,8 inch
                                            <hr color="#555555" size="4px">
                                            Processor : Chip A11 Bionic dengan arsitektur 64 bit
                                            <hr color="#555555" size="4px">
                                            Camera : Kamera telefoto dan wide-angle 12 MP
                                            <hr color="#555555" size="4px">
                                            Video : Mampu merekam video 4K pada kecepatan 24 fps, 30 fps, atau 60 fps
                                            <hr color="#555555" size="4px">
                                            Audio : Batas volume maksimum yang dapat dikonfigurasi pengguna
                                            <hr color="#555555" size="4px">
                                            Operating System : iOs 11
                                            <hr color="#555555" size="4px">
                                            GSM : GSM/EDGE
                                            <hr color="#555555" size="4px">
                                            Connector : Lightning
                                            <hr color="#555555" size="4px">
                                            Dimensi dan Berat : 174 gram (6,14 ounce)
                                            <hr color="#555555" size="4px">
                                            Feature : EarPods dengan Konektor Lightning
                                            <hr color="#555555" size="4px">



                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab2  -->


                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">


                <!-- /product -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

    <?php include 'footer.php';?>

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>