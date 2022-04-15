<?php
    include 'bd.php';
    error_reporting(0);

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $correo =$_POST['email'];
        $comentario = $_POST['message'];
        $sql = "INSERT INTO comentario (nombre, correo) VALUES ('$name', '$correo')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Mensaje enviado con exito!.')</script>";
        } else {
            echo "<script>alert('Ups! Algo salió mal.')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Adop Pet</title>
        <link rel="icon" type="image/x-icon" href="assets/logopaw-removebg-preview.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top"> <img src="assets/img/adoppet-removebg-preview.png" width=150 alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Caracteristicas</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Envianos un mensaje</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">¿Te gustaria adoptar?</h1>
                            <p class="lead fw-normal text-muted mb-5">Te presentamos una opción donde podras adoptar a tu compañia favorita!</p>
                            <a href="https://adoppet.netlify.app/" target="_blank"><button type="button" class="btn btn-dark mb-5"><i class="bi bi-arrow-right-circle"></i>  Entra a nuestra pagina!</button></a>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <a class="me-lg-3 mb-4 mb-lg-0"><img src="assets/img/dog-removebg-preview.png" width=500 alt=""></a>

                    </div>
                </div>
            </div>
        </header>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-heart-fill icon-feature text-gradient d-block mb-1"></i>
                                        <h3 class="font-alt">Encuentra a tu perro favorito</h3>
                                        <p class="text-muted mb-0">Observa a los perritos en adopcion</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-chat-square-text icon-feature text-gradient d-block mb-1"></i>
                                        <h3 class="font-alt">Contactate con nosotros!</h3>
                                        <p class="text-muted mb-0">Puedes comunicarte con nosotros a traves de nuestras redes sociales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi bi-check-circle icon-feature text-gradient d-block mb-1"></i>
                                        <h3 class="font-alt">Respuesta rapida</h3>
                                        <p class="text-muted mb-0">Respondemos tu solicitud de adopcion en el menor tiempo posible.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-phone icon icon-feature text-gradient d-block mb-1"></i>
                                        <h3 class="font-alt">Navegacion sencilla</h3>
                                        <p class="text-muted mb-0">Encuentra al perrito de tus sueños facilmente!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <img src="assets/img/dog2-removebg.png" alt="">      
                        </div>                      
                    </div>
                </div>
            </div>
        </section>
       
        
        
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Adop Pet 2022. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Envia un mensaje</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        
                        <form id="contactForm"  method="post">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name ="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Un nombre es requerido.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="text" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Correo electronico</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Un correo es requerido.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Correo no es valido.</div>
                            </div>
                            
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Comentario</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Un comentario es requerido.</div>
                            </div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Enviado con exito!</div>
                                    
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error en el envio de mensaje!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid">
                                <input class="btn btn-primary rounded-pill btn-lg" type="submit" name="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
