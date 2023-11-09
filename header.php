<?php include_once 'php/LogarUser.php'; ?>
<header>
        <nav class="navbar navbar-expand-xl vermelho-telecall" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img id="logo" src="imagens/LogoTelecall1.png" width="290.63" height="75"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="index.php">
                                Home <i class="fa-solid fa-house fa-sm"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços <i class="fa-solid fa-screwdriver-wrench"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="2FA.php">2FA</a></li>
                                <li><a class="dropdown-item" href="NumeroMascara.php">Número Máscara</a></li>
                                <li><a class="dropdown-item" href="GVC.php">Google Verified Calls</a></li>
                                <li><a class="dropdown-item" href="SMS.php">SMS Programável</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="ModeloDB.php">
                                Modelo do DB <i class="fa-solid fa-database"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="ConsultaUsuario.php">
                                Consulta de Cliente <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Acessibilidade <i class="fa-solid fa-wheelchair"></i>
                            </a>
                            <ul class="dropdown-menu text-center nav-config">
                                <li id="dark-mode-li">
                                    <div class="dark-mode nav-link active">
                                        <input type="checkbox" class="checkbox-dark-mode" id="chk"/>
                                        <label class="label-dark-mode" for="chk">
                                            <i class="fa-solid fa-sun"></i>
                                            <i class="fa-solid fa-moon"></i>
                                            <div class="ball-dark-mode"></div>
                                        </label>
                                    </div>
                                </li>
                                <li id="acessibilidade-li">
                                    <button id="diminuirFonte" class="acessibilidade-fonte">A-</button>
                                    <p>Fontes</p>
                                    <button id="aumentarFonte" class="acessibilidade-fonte">A+</button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sobre nós <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="SobreNos.php">Sobre a empresa</a></li>
                                <li><a class="dropdown-item" href="SobreNos.php#linhadotempo">Linha do tempo</a></li>
                                <li><a class="dropdown-item" href="SobreNos.php#missaovisaovalores">Missão Visão e Valores</a></li>
                                <li><a class="dropdown-item" href="SobreNos.php#presencamundial">Presença mundial</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item nav-hover">
                            <?php 
                                if(isset($_SESSION['perfil'])){
                                    echo '<a class="nav-link" href="Perfil.php" role="button">';
                                }else{
                                    echo '<a class="nav-link" href="Login.php" role="button">';
                                }
                            ?>
                                <p id="cliente">
                                    <?php echo $_SESSION['usuario']; ?>
                                </p>
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>