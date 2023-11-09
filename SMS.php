<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CPaaS Platform - SMS Programável</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imagens/icontelecall.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gruppo">
</head>
<body>
    <?php include_once 'header.php'; ?>
    <div class="content">
        <div id="content" class="white_2FA">
            <button id="scrollToTopButton" onclick="scrollToTop()">&#9650;</button>
            <h1 class="oquee-SMS" data-aos="fade-up">SMS Programável</h1>
            <div class="SMS-oquee" data-aos="fade-up">
                <div class="content-SMS-oquee">
                    <h4>Conecte-se com seus clientes</h2>
                    <p>É muito provável que você já tenha recebido uma mensagem de texto de uma empresa ou organização. Com uma API, qualquer empresa pode enviar mensagens de texto e impactar clientes, prospects ou fornecedores como parte de seu processo comercial. Com essa ferramenta você envia mensagens de SMS com as informações que o seu cliente precisa e com a segurança, a velocidade e a confiabilidade que você espera.</p>
                </div>
                <img src="imagens/SMSProgramável1.png" alt="Imagem SMS Programável">
            </div>
            <div class="porcentagens" data-aos="fade-up">
                <h2 class="text-center h2-porcentagens">SMS é a forma mais rápida, eficiente e de baixo custo para se comunicar com seus clientes.</h2>
                <ul>
                    <li>
                        <h5>98%</h5><p>de taxa de abertura</p>
                    </li>
                    <li>
                        <h5>90%</h5><p>dos SMS são lidos em até 3 minutos.</p>
                    </li>
                    <li>
                        <h5>80%</h5><p>das pessoas interagem com SMS comerciais.</p>
                    </li>
                    <li>
                        <h5>35x</h5><p>maior a probabilidade de um cliente abrir um SMS do que um e-mail.</p>
                    </li>
                </ul>
            </div>
            <h1 id="quemusa" data-aos="fade-up">Quem usa?</h1>
            <div class="quem-usa-SMS" data-aos="fade-up">
                <h2 class="text-center">São muitos os caso de uso, mas veja alguns exemplos:</h2>
                <div class="slider">
                    <div class="images">
                        <input type="radio" name="slide" id="img1" checked>
                        <input type="radio" name="slide" id="img2">
                        <input type="radio" name="slide" id="img3">
                        <input type="radio" name="slide" id="img4">
                        <input type="radio" name="slide" id="img5">
                        <img src="imagens/SMSQuemUsa1.png" class="m1" alt="img1">
                        <img src="imagens/SMSQuemUsa2.png" class="m2" alt="img2">
                        <img src="imagens/SMSQuemUsa3.png" class="m3" alt="img3">
                        <img src="imagens/SMSQuemUsa4.png" class="m4" alt="img4">
                        <img src="imagens/SMSQuemUsa5.png" class="m5" alt="img5">
                    </div>
                    <div id="tela-bloqueio" class="testezin">
                        <div class="top-bar">
                            <div>
                                <i class="fa-solid fa-signal"></i>
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <div>
                                <i class="fa-brands fa-bluetooth-b"></i>
                                <i class="fa-solid fa-battery-full"></i>
                            </div>
                        </div>
                        <i class="fa-solid fa-lock"></i>
                        <p class="hora">10:00</p>
                        <p class="data">Quarta, 15 de Agosto</p>
                        <div class="notificacao">
                            <div class="mensagens">
                                <div class="mensagens-icon">
                                    <img src="imagens/iphone-mensagens.webp">
                                    <p>Mensagens</p>
                                </div>
                                <p>agora</p>
                            </div>
                            <p class="mensagem-content"><b>+1 (989) 717-2287</b></p>
                            <p class="mensagem-content">Clique para visualizar</p>
                        </div>
                        <div class="bottom-icones">
                            <i class="fa-regular fa-lightbulb"></i>
                            <p class="text-center">Clique para Desbloquear</p>
                            <i class="fa-solid fa-camera"></i>
                        </div>
                    </div>
                    <div class="dots">
                        <label class="label-telefone" for="img1"></label>
                        <label class="label-telefone" for="img2"></label>
                        <label class="label-telefone" for="img3"></label>
                        <label class="label-telefone" for="img4"></label>
                        <label class="label-telefone" for="img5"></label>
                    </div>
                </div>
            </div>
            <h1 id="jornadadocliente" data-aos="fade-up">Jornada do cliente</h1>
            <div class="SMS-jornada" data-aos="fade-up">    
                <p>Ofereça uma melhor experiência ao cliente acompanhando a sua jornada de compra.</p>
                <img src="imagens/SMSJornada.png">
            </div>
            <h1 id="beneficios" data-aos="fade-up">Benefícios</h1>
            <div class="usos-GVC text-center" data-aos="fade-up">
                <ul>
                    <li>
                        <i class="fa-regular fa-comment-dots"></i>
                        <p>Comunicação rápida, efetiva e escalável.</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-dollar-sign"></i>
                        <p>Baixo custo.</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-truck-fast"></i>
                        <p>Alta taxa de entrega e leitura.</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-pen-to-square"></i>
                        <p>Personalização de data, hora e conteúdo.</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>Agendamento de campanhas.</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-comments"></i>    
                        <p>Interação bidirecional: recebimento de respostas.</p>
                    </li>
                    <li>
                        <i class="fa-solid fa-thumbs-up"></i>
                        <p>Plataforma user-friendly.</p>
                    </li>
                    <li>
                        <i class="fa-brands fa-readme"></i>
                        <p>Acompanhamento de métricas e relatórios.</p>
                    </li>
                </ul>
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