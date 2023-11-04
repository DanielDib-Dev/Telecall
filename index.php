<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CPaaS Platform - Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imagens/icontelecall.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
<body>
    <?php include_once 'php/LogarUser.php'; ?>
    <header>
        <nav class="navbar navbar-expand-xl vermelho-telecall" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img id="logo" src="imagens/LogoTelecall1.png" width="290.63" height="75"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="index.html">
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
                                <li><a class="dropdown-item" href="2FA.html">2FA</a></li>
                                <li><a class="dropdown-item" href="NumeroMascara.html">Número Máscara</a></li>
                                <li><a class="dropdown-item" href="GVC.html">Google Verified Calls</a></li>
                                <li><a class="dropdown-item" href="SMS.html">SMS Programável</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="ModeloDB.html">
                                Modelo do DB <i class="fa-solid fa-database"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-hover" href="ConsultaUsuario.html">
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
                                <li><a class="dropdown-item" href="SobreNos.html">Sobre a empresa</a></li>
                                <li><a class="dropdown-item" href="SobreNos.html#linhadotempo">Linha do tempo</a></li>
                                <li><a class="dropdown-item" href="SobreNos.html#missaovisaovalores">Missão Visão e Valores</a></li>
                                <li><a class="dropdown-item" href="SobreNos.html#presencamundial">Presença mundial</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item nav-hover">
                            <a class="nav-link" href="Login.html" role="button">
                                <p id="cliente">
                                    <?php echo $_SESSION['Usuario']; ?>
                                </p>
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="content">
        <button id="scrollToTopButton" onclick="scrollToTop()">&#9650;</button>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagens/carousel1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/carousel2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/carousel3.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/carousel4.png" class="d-block w-100" alt="...">
                  </div>
                </div>
            </div>
        </div>
        <h1 data-aos="fade-up">Nossos serviços</h1>
        <ul class="list-quem-usa" data-aos="fade-up">
            <li>
                <img class="quem-usa-img red-img" src="imagens/Solucoes2FA.png" alt="ícone 2FA">
                <h4>2FA</h4>
                <p class="text-start">
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> É um procedimento de segurança que requer 2 fatores únicos para liberação de ação, como senha e autenticação via token, impressão digital, reconhecimento facial ou código SMS.<br>
                </p>
                <a href="2FA.html" class="btn btn-primary btn-card">Saiba mais</a>
            </li>
            <li>
                <img class="quem-usa-img red-img" src="imagens/SolucoesNumeroMascara.png" alt="ícone NumeroMascara">
                <h4>Número Máscara</h4>
                <p class="text-start">
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Este serviço serve para ocultar o número de telefone do usuário ao realizar ligações, substituindo-o por um número genérico. Isso protege a privacidade do usuário e evita que o número seja exposto.<br>
                </p>
                <a href="NumeroMascara.html" class="btn btn-primary btn-card">Saiba mais</a>
            </li>
            <li>
                <img class="quem-usa-img red-img" src="imagens/SolucoesGoogleverifiedCalls.png" alt="ícone NumeroMascara">
                <h4 id="GVC-h4">Google Verified Calls</h4>
                <p class="text-start">
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> É um serviço que ajuda a identificar e proteger usuários contra chamadas de spam e golpes telefônicos, exibindo um indicador de confiança para empresas que utilizam o serviço.<br>
                </p>
                <a href="GVC.html" class="btn btn-primary btn-card">Saiba mais</a>
            </li>
            <li>
                <img class="quem-usa-img red-img" src="imagens/SolucoesSMSProgramavel.png" alt="ícone NumeroMascara">
                <h4>SMS Programável</h4>
                <p class="text-start">
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> É uma solução que permite enviar mensagens SMS em massa automatizadas para clientes, com o objetivo de facilitar o envio de informações, promoções e atualizações em tempo real.<br>
                </p>
                <a href="SMS.html" class="btn btn-primary btn-card">Saiba mais</a>
            </li>
        </ul>
        <h1 data-aos="fade-up">Presença em todo Rio de Janeiro</h1>
        <div class="map-index" data-aos="fade-up">
            <div class="map-center">
                <img class="invert-img" src="imagens/mapa-index.png">
                <div id="map-move" class="map-move">
                    <div id="map-saibamais" class="map-saibamais">
                        <p class=""><i class="fa-solid fa-angles-left"></i> Saiba mais</p>
                    </div>
                    <div class="map-content">
                        <h3>+800 km de rede no Rio de Janeiro</h3>
                        <p>Soluções de acesso que possibilitam as empresas a se conectarem a Internet com a máxima qualidade, disponibilidade e segurança.</p>
                    </div>
                </div>
            </div>
        </div>
        <h1 id="oquee" data-aos="fade-up">O que é CPaaS?</h1><br>
        <div class="cpass-oquee" data-aos="fade-up">
            <div class="cpass-oquee-text">
                <h3 class="text-center">Communications Platform as a Service</h3>
                <h3 class="text-center">Plataforma de Comunicação como Serviço</h3><br>
                <p>É uma solução de software de comunicação que atua como uma base sobre a qual desenvolvedores podem integrar uma variedade de aplicativos. Métodos de comunicação típicos, como voz, chamadas de vídeo ou mensagens de texto SMS, podem ser incorporados em outros sistemas por meio de APIs que se conectam à plataforma CPaaS. Essas APIs permitem que as empresas expandam suas ofertas sem a necessidade de hardware ou software adicional.</p>
            </div>
            <img class="invert-img" src="imagens/modavo1.png" alt="Primeira imagem modavo">
        </div>
        <h1 id="usos" data-aos="fade-up">Usos</h1>
        <ul class="list-quem-usa" data-aos="fade-up">
            <li>
                <img class="quem-usa-img dark-img" src="imagens/UsosLogistica.png" alt="ícone logística">
                <h4>Logística</h4>
                <p class="text-start">
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Acesso seguro com 2FA.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Uso de números mascarados para proteção de funcionário e cliente.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Mantenha o cliente informado sobre entrega e serviços.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Verified calling para confirmação de entregas.
                </p>
            </li>
            <li>
                <img class="quem-usa-img dark-img" src="imagens/UsosVarejo.png" alt="ícone varejo">
                <h4>Varejo</h4>
                <p class="text-start">
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Compra segura com 2FA<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Avisos sobre compras e entregas.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Upsell com novas ofertas e vantagens via SMS ou Verified Calling.
                </p>
            </li>
            <li>
                <img class="quem-usa-img dark-img" src="imagens/UsosCallCenter.png" alt="ícone call center">
                <h4>Call Center</h4>
                <p class="text-start">
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Melhore taxas de abertura utilizando alertas SMS para confirmações.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Economia de números com o uso de um único número máscara por todos os agentes.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Verified Calling para confirmação de agendamentos.
                </p>
            </li>
            <li>
                <img class="quem-usa-img dark-img" src="imagens/UsosSaude.png" alt="ícone saúde">
                <h4>Saúde</h4>
                <p class="text-start">
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Acesso seguro com 2FA.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Melhore o agendamento e reduza faltas com lembretes por SMS.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Tokens de autorização para procedimentos com 2FA.<br>
                    <i class="fa-solid fa-turn-up fa-rotate-90"></i> Verified Calling para avisos de resultados e agendamentos.
                </p>
            </li>
        </ul>
        <h1 data-aos="fade-up">CPaaS e a Transformação Digital</h1>
        <ul class="cpaas-list" data-aos="fade-up">
            <li>Expectativa de crescimento estimado de $ 8,2 bilhões em 2021</li>
            <li>85% dos profissionais se conectam de maneira diferente com colegas e clientes do que faziam há apenas 5 anos.</li>
            <li>As receitas de CPaaS estão crescendo mais de 40%ao ano.</li>
            <li>CPaaS já ultrapassou o mercado de UCaaS (Unified Communication as a Service).</li>
            <li>Marcas que estão em múltiplos canais melhoram a experiência do usuário e aumentam seus resultados.</li>
        </ul>
        <h1 data-aos="fade-up">Vantagens Telecall</h1>
        <div class="usos-GVC" data-aos="fade-up">
            <ul>
                <li>
                    <i class="fa-solid fa-handshake"></i>
                    <h3 class="text-center">Confiança</h3>
                    <p class="text-center">Empresa que já conhecem e confiam.</p>
                </li>
                <li>
                    <i class="fa-solid fa-stopwatch"></i>
                    <h3 class="text-center">Agilidade</h3>
                    <p class="text-center">Aplicativos de rápida implementação.</p>
                </li>
                <li>
                    <i class="fa-solid fa-satellite-dish"></i>
                    <h3 class="text-center">Garantia de Rede</h3>
                    <p class="text-center">Rede própria de alta capacidade e controle total de ponta-a-ponta.</p>
                </li>
                <li>
                    <i class="fa-solid fa-regular fa-envelope-open-text"></i>
                    <h3 class="text-center">Suporte ao Cliente</h3>
                    <p class="text-center">Representantes locais de vendas e suporte.</p>
                </li>
                <li>
                    <i class="fa-solid fa-sack-dollar"></i>
                    <h3 class="text-center">Preço</h3>
                    <p class="text-center">Melhor custo benefício para um conjunto completo de recursos e serviços.</p>
                </li>
            </ul>
        </div>
        <h1 id="quemusa" data-aos="fade-up">Quem usa CPaaS</h1>
        <div class="cpaas-quem-usa" data-aos="fade-up">
            <div>
                <img src="imagens/icon99.png" alt="ícone do 99" height="75" width="75">
                <img src="imagens/iconairbnb.png" alt="ícone do airbnb" height="75" width="75">
                <img src="imagens/iconamazon.png" alt="ícone da amazon" height="75" width="75">
                <img src="imagens/iconamil.png" alt="ícone da amil " height="75" width="75">
                <img src="imagens/iconappstore.png" alt="ícone da appstore" height="75" width="75">
                <img src="imagens/iconbooking.png" alt="ícone do booking" height="75" width="75">
                <img src="imagens/iconbradesco.png" alt="ícone do bradesco" height="75" width="75">
                <img src="imagens/iconcarteiradigitaldetransito.png" alt="ícone da carteira digital de transito" height="75" width="75">
                <img src="imagens/iconcpfdigital.png" alt="ícone do cpf digital" height="75" width="75">
                <img src="imagens/iconebay.png" alt="ícone do ebay" height="75" width="75">
            </div>
            <div>
                <img src="imagens/iconfacebook.png" alt="ícone do facebook" height="75" width="75">
                <img src="imagens/icongloboplay.png" alt="ícone do globoplay" height="75" width="75">
                <img src="imagens/iconhappn.png" alt="ícone do happn" height="75" width="75">
                <img src="imagens/iconifood.png" alt="ícone do ifood" height="75" width="75">
                <img src="imagens/iconinstagram.png" alt="ícone do instagram" height="75" width="75">
                <img src="imagens/iconmercadolivre.png" alt="ícone do mercado livre" height="75" width="75">
                <img src="imagens/iconmercadopago.png" alt="ícone do mercado pago" height="75" width="75">
                <img src="imagens/iconnetflix.png" alt="ícone da netflix" height="75" width="75">
                <img src="imagens/iconpessoafisica.png" alt="ícone do pessoa fisica" height="75" width="75">
                <img src="imagens/iconpicpay.png" alt="ícone do picpay" height="75" width="75">
            </div>
            <div>
                <img src="imagens/iconquintoandar.png" alt="ícone do quinto andar" height="75" width="75">
                <img src="imagens/iconrappi.png" alt="ícone do rappi" height="75" width="75">
                <img src="imagens/iconsalesforce.png" alt="ícone do sales force" height="75" width="75">
                <img src="imagens/iconsap.png" alt="ícone do sap" height="75" width="75">
                <img src="imagens/iconshopify.png" alt="ícone do shopify" height="75" width="75">
                <img src="imagens/icontinder.png" alt="ícone do tinder" height="75" width="75">
                <img src="imagens/iconuber.png" alt="ícone do uber" height="75" width="75">
                <img src="imagens/iconvtex.png" alt="ícone do vtex" height="75" width="75">
                <img src="imagens/iconwhatsapp.png" alt="ícone do whatsapp" height="75" width="75">
                <img src="imagens/iconzendesk.png" alt="ícone do zendesk" height="75" width="75">
            </div>
        </div>
    </div>
    <footer>
        <div id="footer_content">
            <ul class="footer_list">
                <li>
                    <h3>Serviços</h3>
                </li>
                <li>
                    <a href="2FA.html" class="footer_link">2FA</a>
                </li>
                <li>
                    <a href="NumeroMascara.html" class="footer_link">Número Máscara</a>
                </li>
                <li>
                    <a href="GVC.html" class="footer_link">Google Verified Calls</a>
                </li>
                <li>
                    <a href="SMS.html" class="footer_link">SMS Programável</a>
                </li>
            </ul>
	        <ul class="footer_list">
		        <li>
		        	<h3>Sobre nós</h3>
		        </li>
		        <li>
		        	<a href="SobreNos.html" class="footer_link">Institucional</a>
		        </li>
		        <li>
		        	<a href="index.html#oquee" class="footer_link">CPaaS</a>
		        </li>
		        <li>
		        	<a href="PoliticaPrivacidade.html" class="footer_link">Política e Privacidade</a>
		        </li>
	        </ul>
            <div id="footer_contacts">
                <h3>Contatos</h3>
                <a href="https://www.facebook.com/TelecallBr" id="facebook">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/telecallbr/" id="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/telecall/" id="linkedin">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
        </div>
        </div>
        <div id="footer_bottom">
            <p>Copyright © 2018 Telecall. Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="java/java.js"></script>
    </body>
</html>