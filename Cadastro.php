<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CPaaS Platform - Cadastre-se</title>
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
    <div class="content-cliente">
        <div class="box" data-aos="zoom-in">
            <form id="cadastro" action="php/SalvarUser.php" method="post">
                <h2>Cadastre-se</h2>
                <div class="inputBox">
                    <input type="text" id="Usuario" class="inputText inputLetra" required="required" name="usuario" title="" onchange="manterAberto(this);" maxlength="6" data-error="userErro">
                    <span class="span-placeholder"><i class="fa-solid fa-user"></i> Usuário</span>
                    <i class="i-box"></i>
                </div>
                <span id="userErro" class="span-erro">O campo "usuário" deve possuir exatamente 6 caracteres alfabéticos</span>
                <div class="inputBox">
                    <input type="text" id="Nome" class="inputText inputLetra" required="required" name="nome" title="" onchange="manterAberto(this);" maxlength="80" data-error="nomeErro">
                    <span class="span-placeholder"><i class="fa-solid fa-signature"></i> Nome completo</span>
                    <i class="i-box"></i>
                </div>
                <span id="nomeErro" class="span-erro">O campo "nome completo" deve possuir entre 15 e 80 caracteres alfabéticos</span>
                <div class="inputBox">
                    <input type="text" id="CPF" class="inputText" required="required" name="cpf" title="" onchange="manterAberto(this);" maxlength="14">
                    <span class="span-placeholder"><i class="fa-regular fa-id-card"></i> CPF</span>
                    <i class="i-box"></i>
                </div>
                <span id="cpfErro" class="span-erro">O campo "CPF" deve ser válido</span>
                <div class="inputBox">
                    <input type="text" id="DataNasc" class="inputText" required="required" name="dataNasc" title="" onchange="manterAberto(this);" maxlength="10" data-error="nascimentoErro">
                    <span class="span-placeholder"><i class="fa-regular fa-calendar"></i> Data de nascimento</span>
                    <i class="i-box"></i>
                </div>
                <span id="nascimentoErro" class="span-erro">O campo "data de nascimento" deve ser preenchido corretamente</span>
                <div class="inputBox inputGen">
                    <select class="inputText" id="Genero" name="genero" required="required" placeholder="Gênero" title="Selecione um gênero da lista." onchange="manterAberto(this);" data-error="generoErro">
                        <option value="" disabled selected></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                    <span class="span-placeholder"><i class="fa-solid fa-venus-mars"></i> Gênero</span>
                    <i class="i-box"></i>
                </div>
                <span id="generoErro" class="span-erro">O campo "gênero" deve ser preenchido</span>
                <div class="inputBox">
                    <input type="text" id="NomeM" class="inputText inputLetra" required="required" name="nomeM" title="" onchange="manterAberto(this);" maxlength="80" data-error="maeErro">
                    <span class="span-placeholder"><i class="fa-solid fa-signature"></i> Nome da mãe</span>
                    <i class="i-box"></i>
                </div>
                <span id="maeErro" class="span-erro">O campo "nome da mãe" deve possuir entre 15 e 80 caracteres alfabéticos</span>
                <div class="inputBox">
                    <input type="tel" id="Tel" class="inputText inputNum" required="required" name="tel" title="" onchange="manterAberto(this);" maxlength="16" data-error="fixoErro">
                    <span class="span-placeholder"><i class="fa-solid fa-phone"></i> Telefone fixo</span>
                    <i class="i-box"></i>
                </div>
                <span id="fixoErro" class="span-erro">O campo "telefone fixo" deve ser preenchido</span>
                <div class="inputBox">
                    <input type="tel" id="Cel" class="inputText inputNum" required="required" name="cel" title="" onchange="manterAberto(this);" maxlength="16" data-error="celularErro">
                    <span class="span-placeholder"><i class="fa-solid fa-mobile-screen-button"></i>Telefone celular</span>
                    <i class="i-box"></i>
                </div>
                <span id="celularErro" class="span-erro">O campo "telefone celular" deve ser preenchido</span>
                <div class="inputBox">
                    <input type="text" id="Endereco" class="inputText" required="required" name="endereco" title="" onchange="manterAberto(this);" data-error="enderecoErro">
                    <span class="span-placeholder"><i class="fa-solid fa-house"></i> Endereço completo</span>
                    <i class="i-box"></i>
                </div>
                <span id="enderecoErro" class="span-erro">O campo "endereço completo" deve ser preenchido</span>
                <div class="inputBox">
                    <input type="text" id="Cep" class="inputText" required="required" name="cep" title="" onchange="manterAberto(this);" maxlength="9" pattern= "\d{5}-\d{3}" data-error="cepErro">
                    <span class="span-placeholder"><i class="fa-solid fa-house"></i> CEP</span>
                    <i class="i-box"></i>
                </div>
                <span id="cepErro" class="span-erro">O campo "CEP" deve ser preenchido seguindo o exemplo: 12345-789</span>
                <div class="inputBox">
                    <input type="password" id="Senha" class="inputText inputPassword inputLetra" required="required" name="senha" title="" oninput="manterAberto(this);" maxlength="8" data-error="senhaErro">
                    <i class="fa-solid fa-eye"></i>
                    <span class="span-placeholder"><i class="fa-solid fa-lock"></i> Senha</span>
                    <i class="i-box"></i>
                </div>
                <span id="senhaErro" class="span-erro">O campo "senha" deve ter 8 caracteres alfabéticos.</span>
                <div class="inputBox">
                    <input type="password" id="Confirma" class="inputText inputPassword inputLetra" required="required" name="confirma" title="" oninput="manterAberto(this);" maxlength="8" data-error="confirmaErro">
                    <i class="fa-solid fa-eye"></i>
                    <span class="span-placeholder"><i class="fa-solid fa-lock"></i> Confirmar Senha</span>
                    <i class="i-box"></i>
                </div>
                <input type="hidden" id="Perfil" name="perfil" value="1">
                <span id="confirmaErro" class="span-erro">Os campos "senha" e "confirmar senha" devem ser iguais.</span>
                <div class="links">
                    <a href="Login.php" class="criarconta">Já possui conta? Entre aqui</a>
                </div>
                <div class="form-botoes">
                    <input type="reset" class="botao-form" value="Resetar">
                    <input type="submit" class="botao-form" value="Criar" id="submit">
                </div>
            </form>
        </div>
    </div>
    <div id="modal" class="modal-fundo">
        <div class="modal-cliente">
            <h4>Cadastro realizado com sucesso!</h4>
            <p>O cadastro foi concluído com sucesso. Agora você pode fazer login.</p>
            <a href="Login.php" id="modal-logar" class="btn btn-primary">Faça login</a>
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