<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CPaaS Platform - Entrar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imagens/icontelecall.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
<body>
    <?php include_once 'header.php';?>
    <div class="content-cliente">
        <div class="box"  data-aos="zoom-in">
            <form id="login" action="php/LogarUser.php" method="post">
                <h2>Entre na conta</h2>
                <div class="inputBox">
                    <input type="text" class="inputText inputLetra" required name="usuario" title="" onchange="manterAberto(this);" maxlength="6" autocomplete="off">
                    <span class="span-placeholder"><i class="fa-solid fa-user"></i> Usuário</span>
                    <i class="i-box"></i>
                </div>
                <div class="inputBox">
                    <input type="password" class="inputText inputPassword inputLetra" required name="senha"  title="" oninput="manterAberto(this);" maxlength="8" autocomplete="off">
                    <i class="fa-solid fa-eye"></i>
                    <span class="span-placeholder"><i class="fa-solid fa-lock"></i> Senha</span>
                    <i class="i-box"></i>
                </div>
                <span id="senhaErro" class="span-erro">O campo "senha" deve ser preenchido</span>
                <div class="inputBox">
                    <select class="inputText" id="Perfil" name="perfil" required placeholder="Tipo de Perfil" title="Selecione um tipo de perfil." onchange="manterAberto(this);">
                        <option value="" disabled selected></option>
                        <option value="1">Perfil Comum</option>
                        <option value="2">Perfil Master</option>
                    </select>
                    <span class="span-placeholder"><i class="fa-solid fa-users"></i> Tipo de Perfil</span>
                    <i class="i-box"></i>
                </div>
                <div class="links">
                    <a href="Cadastro.php" class="criarconta">Crie uma conta</a>
                </div>
                <div class="form-botoes">
                    <input type="submit" class="botao-form" value="Entrar">
                    <input type="reset" class="botao-form" value="Resetar">
                </div>
            </form>
        </div>
    </div>
    <div id="modal-sucesso" class="modal-fundo">
        <div class="modal-cliente">
            <h4>Sucesso!</h4>
            <p>Você logou em sua conta com sucesso.</p>
            <a href="index.php" class="btn btn-primary">Ir para a página inicial</a>
        </div>
    </div>  
    <div id="modal-erro" class="modal-fundo">
        <div class="modal-cliente">
            <h4>Erro!</h4>
            <p>Os dados inseridos estão incorretos.</p>
            <a href="Login.php" class="btn btn-primary">Tentar novamente</a>
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