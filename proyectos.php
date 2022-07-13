<?php $pg = "proyectos"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/logopestaña.png">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 p-4">
                <div class="row border proyecto">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="abmclientes" class="img-fluid">
                        <h2>ABM CLIENTES</h2>
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                            Bootstrap y Json.
                        </p>
                    </div>
                    <div class="col-6 px-0 py-4">
                        <a href="#" class="btn-rojo" target="_blank">Ver online</a>
                    </div>
                    <div class="col-6 px-0 py-4 text-center">
                        <a href="#" class="codigo-fuente">Código fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-4">
                <div class="row border proyecto">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="abmclientes" class="img-fluid">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y
                            MySQL de base de datos.
                        </p>
                    </div>
                    <div class="col-6 px-0 py-4">
                        <a href="#" class="btn-rojo" target="_blank">Ver online</a>
                    </div>
                    <div class="col-6 px-0 py-4 text-center">
                        <a href="#" class="codigo-fuente">Código fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-4">
                <div class="row border proyecto">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="abmventas" class="img-fluid">
                        <h2>PROYECTO INTEGRADOR</h2>
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel
                            administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.
                        </p>
                    </div>
                    <div class="col-6 px-0 py-4">
                        <a href="#" class="btn-rojo" target="_blank">Ver online</a>
                    </div>
                    <div class="col-6 px-0 py-4 text-center">
                        <a href="#" class="codigo-fuente">Código fuente</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-4">
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