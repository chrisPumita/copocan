<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Copocan</title>
    <?php include_once "./include/head.php"?>
    <style>
        .wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 5px;
            background-image: linear-gradient(to top, #34424F 0%, #BDDCDE 100%);
            overflow: hidden;
        }

        .wave {
            width: 1000px;
            height: 1025px;
            position: absolute;
            top: -25%;
            left: 50%;
            margin-left: -500px;
            margin-top: -500px;
            border-radius: 35%;
            background: rgb(223 167 170 / 75%);
            animation: wave 15s infinite linear;
        }

        @keyframes wave {
            from { transform: rotate(0deg);}
            from { transform: rotate(360deg);}
        }


        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #E0E5D2;
        }

        .overlay::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: auto !important;
            height: auto; !important;
            z-index: -1;
        }

        .single_service:hover .overlay {
            opacity: 1;
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

    </style>
</head>

<body>
<?php include_once "./include/header.php"?>

<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg" style="background-image: url(./img/banner/contact_bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcam_text text-center">
                    <h3>Servicios</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<!-- service_area_start  -->
<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-7 col-md-10">
                <div class="section_title text-center mb-95">
                    <h3>Services for every dog</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                        <div class="service_icon">
                            <img src="img/service/service_icon_1.png" alt="">
                        </div>
                    </div>
                    <div class="service_content text-center">
                        <h3>Pet Boarding</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service active">
                    <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                        <div class="service_icon">
                            <img src="img/service/service_icon_2.png" alt="">
                        </div>
                    </div>
                    <div class="service_content text-center">
                        <h3>Healthy Meals</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                        <div class="service_icon">
                            <img src="img/service/service_icon_3.png" alt="">
                        </div>
                    </div>
                    <div class="service_content text-center">
                        <h3>Pet Spa</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex  align-items-center justify-content-center">
            <div class="row  align-items-center justify-content-center">
                <a href="#" class="boxed-btn3 m-3" data-toggle="modal" data-target="#exampleModal">Catálogo de servicio</a>
            </div>
        </div>
    </div>
</div>
<!-- service_area_end -->

<!-- testmonial_area_start  -->
<div class="testmonial_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="textmonial_active owl-carousel">
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>Jhon Walker</h4>
                                <span>Head of web design</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>Jhon Walker</h4>
                                <span>Head of web design</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>Jhon Walker</h4>
                                <span>Head of web design</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- testmonial_area_end  -->


<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="contact_anipat anipat_bg_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact_text text-center">
                        <div class="section_title text-center">
                            <h3>¿Requieres un presupuesto o algún otro servicio?</h3>
                            <p>¡Con gusto te atendemos! en nuestros horarios de atención telefónica y digital
                                Lunes a Sábado de 9:00 a 19:00 hrs y Domingo de 9:00 a 15:00 hrs
                            </p>
                        </div>
                        <div class="contact_btn d-flex align-items-center justify-content-center">
                            <a href="contact.php" class="boxed-btn4">¡Contáctanos!</a>
                            <p>O llámanos  <a href="#"> 56 2745 8480</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

<?php include_once "./include/footer.php"?>
<?php include_once "./include/js.php"?>
<?php include_once "./modal-catalog.php"?>
</body>

</html>