<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CPaaS Platform - 2FA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imagens/icontelecall.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
<body>
    <?php include_once 'header.php'; ?>
    <div class="content">
        <button id="scrollToTopButton" onclick="scrollToTop()">&#9650;</button>
        <div id="content" class="white_2FA">
            <div class="oquee_2FA" data-aos="fade-up">
                <div class="oquee_content">
                    <h1 id="h1_2FA">Two-Factor Authentication</h1>
                    <h1>Autenticação de dois fatores</h1>
                    <p>O 2FA é um procedimento de segurança que garante que serão necessários 2 fatores únicos para liberação de uma ação. O primeiro fator é a senha que o usuário e o segundo pode ser autenticado via token, via detecção de impressão digital, reconhecimento facial, código enviado via sms, entre outros.</p>
                </div>
                <div class="oquee_image">
                    <img src="imagens/2FA.png" alt="Exemplo 2FA" id="Exemplo2FA">
                </div>
            </div>
            <div class="lista_2FA" data-aos="fade-up">    
                <h1>O 2FA permite que você:</h1>
                <ol>
                    <li><b>Envie</b> uma senha via SMS, voz ou e-mail para autenticação do usuário.</li>
                    <li><b>Adicione</b> uma camada extra de segurança além da senha pessoal.</li>
                    <li><b>Ofereça</b> maior segurança para usuários.</li>
                </ol>
            </div>
            <h1 data-aos="fade-up">Fortaleça a estratégia de segurança de seu negócio.</h1>
            <div class="porcentagens" data-aos="fade-up">
                <h4 class="text-center">Adicionar um número de telefone de recuperação a uma conta individual pode bloquear até:</h4>
                <ul>
                    <li>
                        <h5>100%</h5><p>dos bots automatizados</p>
                    </li>
                    <li>
                        <h5>99%</h5><p>dos ataques de phishing em massa</p>
                    </li>
                    <li>
                        <h5>66%</h5><p>dos ataques direcionados</p>
                    </li>
                </ul>
            </div>
            <h1 id="comofunciona" data-aos="fade-up">Como funciona?</h1>
            <div class="como-funciona-2FA" data-aos="fade-up">
                <ol>
                    <li class="como-funciona-2FA-1"><p>Usuário acessa seu site o aplicativo e digita a senha cadastrada para entrar em seu perfil ou completar uma transação.</p></li>
                    <i class="fa-solid fa-arrow-down"></i>
                    <li class="como-funciona-2FA-1"><p> Telecall recebe a tentativa de login e solicita que o usuário insira seu número de telefone para autorizar o acesso.</p></li>
                    <i class="fa-solid fa-arrow-down"></i>
                    <li class="como-funciona-2FA-1"><p>Após inserir seu número, a Telecall envia para o usuário por SMS, chamada ou e-mail um código PIN de uso único. Esse código PIN é também conhecido como OTP (One Time Password).</p></li>
                    <i class="fa-solid fa-arrow-down"></i>
                    <li class="como-funciona-2FA-1"><p>O usuário insere o código no site ou aplicativo para concluir o processo de verificação.</p></li>
                </ol>
                <img src="imagens/verificacao_em_duas_etapas.jpg">
            </div>
            <h1 id="beneficios" data-aos="fade-up">Beneficios</h1>
            <div class="beneficios" data-aos="fade-up">
                <ul>
                    <li>Ofereça <b>segurança aprimorada</b> para seus clientes.</li>
                    <li>Reduza casos de <b>fraude e invasões</b> e evite o acesso a dados por invasores.</li>
                    <li>Envio de OTP por meio de <b>vários canais</b>, incluindo SMS, voz ou e-mail.</li>
                    <li><b>Flexibilidade</b> de canais. Exemplo: Enviar OTP por SMS, em caso de falha, enviar OTP por chamada de voz, em caso de outra falha, enviar por e-mail.</li>
                    <li>API simples e de <b>rápida implementação</b>.</li>
                    <li><b>Plataforma intuitiva</b> que permite visualizar relatórios de uso por dia, mês ou ano e pesquisar usando diversos critérios de filtro.</li>
                </ul>
            </div>
            <h1 id="quemusa" data-aos="fade-up">Quem usa?</h1>
            <div class="body-quem-usa" data-aos="fade-up">
                <ul class="list-quem-usa">
                    <li>
                        <img class="quem-usa-img dark-img" src="imagens/2FAQuemUsa1.png" alt="Primeira imagem do 'Quem usa'" width="200" height="200">
                        <h4>Finanças</h4>
                        <p>Acesso ao portal/app</p>
                        <p>Autenticação para transações bancárias</p>
                        <p>Pagamentos Online (PicPay, PayPal)</p>
                        <p>Digital Wallets (Google Pay, Apple Pay, Samsung Pay)</p>
                        <img class="quem-usa-icone" src="imagens/iconbradesco.png" alt="icone bradesco" width="100" height="100">
                        <img class="quem-usa-icone" src="imagens/iconpicpay.png" alt="icone picpay" width="100" height="100">
                        <img class="quem-usa-icone" src="imagens/iconmercadopago.png" alt="icone mercadopago" width="100" height="100">
                    </li>
                    <li>
                        <img class="quem-usa-img dark-img" src="imagens/2FAQuemUsa2.png" alt="Segunda imagem do 'Quem usa'" width="200" height="200">
                        <h4>Saúde</h4>
                        <p>Acesso ao portal/app</p>
                        <p>Agendamentos</p>
                        <p>Tokens de autorização</p>
                        <p>Telemedicina</p>
                        <img class="quem-usa-icone" src="imagens/iconamil.png" alt="icone amil" width="100" height="100">
                    </li>
                    <li>
                        <img class="quem-usa-img dark-img" src="imagens/2FAQuemUsa3.png" alt="Terceira imagem do 'Quem usa'" width="200" height="200">
                        <h4>Turismo</h4>
                        <p>Acesso ao portal/app</p>
                        <p>Gestão de Reservas</p>
                        <p>Acesso ao histórico</p>
                        <p>Salvar dados de pagamentos</p>
                        <p>Recuperação de Senha</p>
                        <img class="quem-usa-icone" src="imagens/iconairbnb.png" alt="icone airbnb" width="100" height="100">
                        <img class="quem-usa-icone" src="imagens/iconbooking.png" alt="icone booking" width="100" height="100">
                    </li>
                    <li>
                        <img class="quem-usa-img dark-img" src="imagens/2FAQuemUsa4.png" alt="Quarta imagem do 'Quem usa'" width="200" height="200">
                        <h4>Varejo</h4>
                        <p>Acesso ao portal/app</p>
                        <p>Salvar dados de pagamentos</p>
                        <p>Acesso ao histórico</p>
                        <p>Recuperação de Senha</p>
                        <p>Recibo Eletrônico</p>
                        <img class="quem-usa-icone" src="imagens/iconamazon.png" alt="icone amazon" width="100" height="100">
                        <img class="quem-usa-icone" src="imagens/iconappstore.png" alt="icone appstore" width="100" height="100">
                        <img class="quem-usa-icone" src="imagens/iconmercadolivre.png" alt="icone mercadolivre" width="100" height="100">
                    </li>
                    <li>
                        <img class="quem-usa-img dark-img" src="imagens/2FAQuemUsa5.png" alt="Quinta imagem do 'Quem usa'" width="200" height="200">
                        <h4>Governo</h4>
                        <p>Acesso ao portal/app</p>
                        <p>Gestão de informações Agendamentos</p>
                        <p>Recuperação de Senha</p>
                        <img class="quem-usa-icone" src="imagens/iconcarteiradigitaldetransito.png" alt="icone carteira digital de transito" width="100" height="100">
                        <img class="quem-usa-icone" src="imagens/iconcpfdigital.png" alt="icone cpf digital" width="100" height="100">
                        <img class="quem-usa-icone" src="imagens/iconpessoafisica.png" alt="icone pessoa fisica" width="100" height="100">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php'; ?> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="java/java.js"></script>
    </body>
</html>