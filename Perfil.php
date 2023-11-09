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
            <div>
                <p class="perfilP">Usuário: <?php echo $_SESSION['usuario']; ?></p>
                <p class="perfilP">Nome: <?php echo $_SESSION['nome']; ?></p>
                <p class="perfilP">Data de nascimento: <?php echo $_SESSION['dataNasc']; ?></p>
                <p class="perfilP">Gênero: <?php echo $_SESSION['genero']; ?></p>
                <p class="perfilP">Nome da mãe: <?php echo $_SESSION['nomeM']; ?></p>
                <p class="perfilP">Telefone: <?php echo $_SESSION['tel']; ?></p>
                <p class="perfilP">Celular: <?php echo $_SESSION['cel']; ?></p>
                <p class="perfilP">Endereço: <?php echo $_SESSION['endereco']; ?></p>
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