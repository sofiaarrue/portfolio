<?php $pg="sobre-mi"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/logopestaña.png">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <section id="descripcion" class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-5 mt-4">
                    <h1 class="pb-sm-3 mt-4">Sobre mí</h1>
                    <p class="pb-sm-5">Apasionada de la creatividad tecnológica. Disfruto de crear y aprender trabajando en equipo. Soy estudiante universitaria.</p>
                    <a href="contacto.php" class="btn-cv">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 py-2 mt-4 offset-sm-2 text-center">
                    <img src="images/sofiaarrue.jpg" alt="Sofía Arrúe" title="Sofía Arrúe" class="mi-imagen img-fluid">
                </div>
            </div>
        </section>
        <section id="stack-tecnologico" class="pt-4 pt-sm-0 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5">Stack tecnológico </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>JavaScript</h3>
                            <img src="images/javascript.jpeg" width="60" alt="JavaScript">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>PHP</h3>
                            <img src="images/php.jpg" width="60" alt="PHP">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>HTML 5</h3>
                            <img src="images/html5.png" width="60" alt="html 5">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>React.js</h3>
                            <img src="images/react.js" width="60" alt="React.js">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>jQuery</h3>
                            <img src="images/jQuery.jpg" width="60" alt="jQuery">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>Bootstrap</h3>
                            <img src="images/bootstrap.png" width="60" alt="Bootstrap">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>Laravel</h3>
                            <img src="images/laravel.png" width="60" alt="Laravel">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>MySQL</h3>
                            <img src="images/mysql.png" width="60" alt="MySQL">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>CSS</h3>
                            <img src="images/css.png" width="60" alt="CSS">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>Git</h3>
                            <img src="images/git.png" width="60" alt="Git">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>Apache</h3>
                            <img src="images/apache.png" width="60" alt="Apache">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 pb-3">
                        <div class="tecnologias py-5">
                            <h3>Mercadopago</h3>
                            <img src="images/mercadopago.jpg" width="60" alt="Mercadopago">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container p-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="pb-4">
                        <i class="fa-solid fa-briefcase"></i>
                        Experiencia laboral
                    </h2>
                </div>
            </div>
            <div class="row shadow p-1">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block text-center">
                            <a href="https://depcsuite.com" target="_blank"> <img src="images/logo-depcsuite.svg" class="img-fluid gris" alt="DePC Suite"></a>
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Puesto</h3>
                            <h4>COMPAÑIA</h4>
                            <h5>2022 - Presente</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas natus facilis et corrupti
                                cum vel iste eius, architecto ullam vitae dolorum dignissimos? Nulla dolorum
                                voluptatibus cum fuga corrupti. Dolore, deleniti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block text-center">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Puesto</h3>
                            <h4>COMPAÑIA</h4>
                            <h5>2022 - Presente</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas natus facilis et corrupti
                                cum vel iste
                                eius, architecto ullam vitae dolorum dignissimos? Nulla dolorum voluptatibus cum fuga
                                corrupti. Dolore,
                                deleniti.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rojo">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">
                        <i class="fas fa-graduation-cap"></i>
                        Formación académica
                    </h2>
                </div>
            </div>
            <div class="row shadow p-1 rojo">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 my-auto d-none d-sm-block text-center">
                            <a href="https://www.unlam.edu.ar/" target="_blank"> <img src="images/unlam.png" class="img-fluid gris" alt="Unlam"></a>
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Profesorado en Educación Física</h3>
                            <h4>Universidad Nacional de la Matanza</h4>
                            <h5>Abril 2022 - Presente</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 my-auto d-none d-sm-block text-center">
                            <a href="https://stodomingo.com.ar/" target="_blank"> <img src="images/santdom.png" class="img-fluid gris" alt="Santo Domingo"></a>
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Bachiller en Ciencias Sociales</h3>
                            <h4>Colegio Santo Domingo</h4>
                            <h5>2020</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rojo">
                <div class="col-12">
                    <h2 class="pt-5 pb-4">
                        <i class="fas fa-graduation-cap"></i>
                        Cursos de desarrollo profesional
                    </h2>
                </div>
            </div>
            <div class="row shadow p-1 rojo">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 my-auto d-none d-sm-block text-center">
                            <a href="https://depcsuite.com/" target="_blank"> <img src="images/logo-depcsuite.svg" class="img-fluid gris" alt="DePC"></a>
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Full Stack Developer</h3>
                            <h4>DePC Suite</h4>
                            <h5>Mayo 2022 - Presente</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 my-auto d-none d-sm-block text-center">
                            <a href="https://www.utn-inspt-cfc.com.ar/" target="_blank"> <img src="images/UTN_logo.jpg" class="img-fluid gris" alt="UTN"></a>
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Excel y Word Intermedio</h3>
                            <h4>Colegio Santo Domingo (Curso UTN)</h4>
                            <h5>2019</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="otros">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row me-sm-1 ms-sm-1 blanco shadow">
                            <div class="col-4 violeta text-center pt-5">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativa</li>
                                    <li>INGLES - C1 Advanced</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row me-sm-1 ms-sm-1 blanco shadow">
                            <div class="col-4 violeta text-center pt-5">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>DEPORTES - Fútbol</li>
                                    <li>MUSICA - Piano, Guitarra</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="container py-4">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=1122627582" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com/sofiaarrue" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:sofiarruee@gmail.com">sofiarruee@gmail.com</a>
            </div>
        </div>
    </footer>

</body>

</html>