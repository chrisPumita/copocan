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
                    <h3>Nosotros</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->
<!-- pet_care_area_start  -->
<div class="pet_care_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="pet_thumb">
                    <img src="img/about/pet_care.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <div class="pet_info">
                    <div class="section_title">
                        <h3><span>We care your pet </span> <br>
                            As you care</h3>
                        <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do <br> iusmod tempor incididunt ut labore et dolore magna aliqua. <br> Quis ipsum suspendisse ultrices gravida. Risus commodo <br>
                            viverra maecenas accumsan.</p>
                        <a href="about.html" class="boxed-btn3">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pet_care_area_end  -->
<!-- adapt_area_start  -->
<div class="adapt_area">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="adapt_help">
                    <div class="section_title">
                        <h3><span>We need your</span>
                            help Adopt Us</h3>
                        <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do iusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                        <a href="contact.html" class="boxed-btn3">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="adapt_about">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/1.png" alt="">
                                <div class="adapt_content">
                                    <h3 class="counter">452</h3>
                                    <p>Pets Available</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/3.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">52</span>+</h3>
                                    <p>Pets Available</p>
                                </div>
                            </div>
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/2.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">52</span>+</h3>
                                    <p>Pets Available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- adapt_area_end  -->
<!-- team_area_start  -->
<div class="team_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-6 col-md-10">
                <div class="section_title text-center">
                    <h3>Nuestro equipo</h3>
                    <p>Egresadas de la Facultad de Estudios Superiores Cuautitlán de la Universidada Nacional Autónoma de México
                        Estilistas Caninas Certificadas por la Asociación Latinoamericana de Estilistas Caninos (ALEC)
                    </p>
                </div>
            </div>
        </div>
        <div class="testmonial_area p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="textmonial_active owl-carousel">
                            <div class="testmonial_wrap">
                                <div class="single_testmonial d-flex align-items-center">
                                    <div class="test_thumb">
                                        <img src="img/team/Abril-Bustamante.png" alt="Abril">
                                    </div>
                                    <div class="test_content">
                                        <h4>Abril Bustamante Rueda</h4>
                                        <span>Médica Veterinaria Zootecnista - UNAM</span>
                                        <p>Médico Veterinario y Estilista Canino Profesional</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testmonial_wrap">
                                <div class="single_testmonial d-flex align-items-center">
                                    <div class="test_thumb">
                                        <img src="img/team/Mayra.png" alt="Mayra">
                                    </div>
                                    <div class="test_content">
                                        <h4>Mayra Domínguez Vázquez</h4>
                                        <span>P. Médica Veterinaria Zootecnista - UNAM</span>
                                        <p>P. Médico Veterinario y Estilista Canino Profesional</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team_area_start  -->


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

</body>

</html>