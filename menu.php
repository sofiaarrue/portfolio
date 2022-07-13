        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link my-1 my-sm-0 px-4 py-1 <?php echo ($pg == "inicio") ? "active" : ""; ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my-1 my-sm-0 px-4 py-1 <?php echo ($pg == "sobre-mi") ? "active" : ""; ?>" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my-1 my-sm-0 px-4 py-1 <?php echo ($pg == "proyectos") ? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my-1 my-sm-0 px-4 py-1 <?php echo ($pg == "contacto") ? "active" : ""; ?>" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <a href="" class="btn-cv">Descargar mi CV<i class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>