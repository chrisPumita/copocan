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
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcam_text text-center">
                    <h3>contacto</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15033.054891837954!2d-99.3002483!3d19.6160199!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x60ae2c4df00cd896!2sCopocan!5e0!3m2!1ses-419!2smx!4v1661311739712!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">CONTÁCTANOS</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escribe un mensaje o pregunta'" placeholder=" Escribe un mensaje o pregunta"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo'" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" placeholder="Asunto">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <div class="switch-wrap d-flex justify-content-between">
                                    <p>Mi mascota es un perro</p>
                                    <div class="primary-checkbox">
                                        <input type="checkbox" id="perro">
                                        <label for="perro"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <div class="switch-wrap d-flex justify-content-between">
                                    <p>Mi mascota es un gato</p>
                                    <div class="primary-checkbox">
                                        <input type="checkbox" id="gato">
                                        <label for="gato"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Plaza San Ildefonso, Nicolás Romero</h3>
                        <p> Estado de México</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>56 2745 8480</h3>
                        <p> Lun-Sáb 9:00 - 16:00 <br> Dom 9:00 -12:00 <br> Jueves cerrado</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>hola@copocan.com</h3>
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