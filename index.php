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
<!-- slider_area_start -->
<div class="slider_area">
    <div class="wrapper position-absolute w-100 h-100">
        <div class="wave"></div>
    </div>
    <div class="single_slider slider_bg_1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="slider_text">
                        <h3>Los cuidamos<br> <span>tanto como t??</span></h3>
                        <p>Salud y vida plena para tus mascotas</p>
                        <a href="contact.php" class="boxed-btn4">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dog_thumb d-none d-lg-block">
            <img src="img/banner/Encabezado.png" alt="">
        </div>
    </div>

</div>

<!-- slider_area_end -->

<!-- service_area_start  -->
<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-7 col-md-10">
                <div class="section_title text-center mb-95">
                    <h3>SERVICIOS A SU MEDIDA</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                        <div class="service_icon">
                            <img src="img/service/Banyos.svg" class="w-75" alt="Ba??os">
                        </div>
                    </div>
                    <div class="service_content text-center">
                        <h3>Paquetes
                            Est??ticos
                        </h3>
                        <p>Servicios certificados
                            con amor y paciencia
                            para tu mascota
                        </p>
                    </div>
                    <div class="overlay single_service">
                        <h3 class="mb-20">Servicios</h3>
                        <ul class="unordered-list">
                            <li>Ba??o Un Mant</li>
                            <li>Ba??o Doble Manto</li>
                            <li>Ba??o+Corte</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service active">
                    <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                        <div class="service_icon">
                            <img src="img/service/Estetica.svg" class="w-75" alt="Est??tica">
                        </div>
                    </div>
                    <div class="service_content text-center">
                        <h3>Servicios
                            Est??ticos
                        </h3>
                        <p>Servicios individuales que
                            se ajustan a tus necesidades
                        </p>
                    </div>
                    <div class="overlay single_service">
                        <h3 class="mb-20">Servicios</h3>
                        <ul class="unordered-list">
                            <li>Pedicure</li>
                            <li>Cuidado Bucal</li>
                            <li>Deslanado y cepillado profundo</li>
                            <li>Limpieza y depilaci??n de o??dos</li>
                            <li>Aromaterapia*</li>
                            <li>Ba??o antipulgas*</li>
                            <li>Spa complementario*</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                        <div class="service_icon">
                            <img src="img/service/Servicios.svg" class="w-75" alt="Servicios complementarios">
                        </div>
                    </div>
                    <div class="service_content text-center">
                        <h3>Medicina Preventiva</h3>
                        <p>Servicios de medicina preventiva para perros y gatos</p>
                    </div>
                    <div class="overlay single_service">
                        <h3 class="mb-20">Servicios</h3>
                        <ul class="unordered-list">
                            <li>Vacunaci??n</li>
                            <li>Desparasitaci??n interna</li>
                            <li>Desparasitaci??n externa (tratamiento para el control de pulgas, piojos, ??caros y garrapatas)</li>
                            <li>Profilaxis dental</li>
                            <li>Asesor??a tenencia responsable</li>
                            <li>Consulta externa</li>
                            <li>Pruebas de laboratorio</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex  align-items-center justify-content-center">
                <div class="row  align-items-center justify-content-center">
                    <a href="#" class="boxed-btn3 m-3" data-toggle="modal" data-target="#exampleModal">Cat??logo de servicio</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service_area_end -->

<!-- pet_care_area_start  -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="pet_care_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="pet_thumb">
                                <img src="img/about/pet_care_2.png" alt="Perrito">
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 col-md-6">
                            <div class="pet_info">
                                <div class="section_title">
                                    <h3><span>Accesorios y Productos </span> <br>
                                        especializados</h3>
                                    <p>En Copocan nos importa el bienestar de tu mascota, por eso ofrecemos los mejores accesorios y snacks</p>
                                    <a href="about.html" class="boxed-btn3">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="pet_care_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 order-0 order-md-1">
                            <div class="pet_thumb">
                                <img src="img/about/Coponera-min.png" alt="Coponera">
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 col-md-6 order-1 order-md-0">
                            <div class="pet_info">
                                <div class="section_title">
                                    <h3>Cuponera<span> Copocan </span> <br></h3>
                                    <p>Recibe una coponera en su primera sesi??n de ba??o o ba??o+corte
                                        y ??obt??n grandes beneficios con cada visita!
                                    </p>
                                    <a href="about.html" class="boxed-btn3">Solicita tu presupuesto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<!-- pet_care_area_end  -->

<!-- adapt_area_start  -->
<div class="adapt_area">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="adapt_help">
                    <div class="section_title">
                        <h3>Accesorios y Productos<span><br>especializados</span> </h3>
                        <p>
                            En Copocan nos importa el bienestar de tu mascota, por eso ofrecemos los mejores accesorios y snacks
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=5215627458480" target="_blank" class="boxed-btn3"><i class="fa fa-whatsapp" aria-hidden="true"></i> Contactar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="adapt_about">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/services_icon.svg" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">600</span>+</h3>
                                    <p>Servicios est??ticos realizados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/accesorios_icon.svg" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">30</span>+</h3>
                                    <p>variedad de accesorios</p>
                                </div>
                            </div>
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/care_pets_icon.svg" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">250</span>+</h3>
                                    <p>mascotas protegidas</p>
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
                    <p>Egresadas de la Facultad de Estudios Superiores Cuautitl??n de la Universidada Nacional Aut??noma de M??xico
                        Estilistas Caninas Certificadas por la Asociaci??n Latinoamericana de Estilistas Caninos (ALEC)
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
                                        <span>M??dica Veterinaria Zootecnista - UNAM</span>
                                        <p>M??dico Veterinario y Estilista Canino Profesional</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testmonial_wrap">
                                <div class="single_testmonial d-flex align-items-center">
                                    <div class="test_thumb">
                                        <img src="img/team/Mayra.png" alt="Mayra">
                                    </div>
                                    <div class="test_content">
                                        <h4>Mayra Dom??nguez V??zquez</h4>
                                        <span>P. M??dica Veterinaria Zootecnista - UNAM</span>
                                        <p>P. M??dico Veterinario y Estilista Canino Profesional</p>
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

<div class="contact_anipat anipat_bg_1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact_text text-center">
                    <div class="section_title text-center">
                        <h3>??Requieres un presupuesto o alg??n otro servicio?</h3>
                        <p>??Con gusto te atendemos! en nuestros horarios de atenci??n telef??nica y digital
                            Lunes a S??bado de 9:00 a 19:00 hrs y Domingo de 9:00 a 15:00 hrs
                        </p>
                    </div>
                    <div class="contact_btn d-flex align-items-center justify-content-center">
                        <a href="contact.php" class="boxed-btn4">??Cont??ctanos!</a>
                        <p>O ll??manos  <a href="#"> 56 2745 8480</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "./include/footer.php"?>
<?php include_once "./include/js.php"?>
<?php include_once "./modal-catalog.php"?>
</body>

</html>