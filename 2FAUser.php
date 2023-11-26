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
    <?php include_once 'header.php'; ?>
    <div class="content-cliente">
        <div class="box"  data-aos="zoom-in">
            <form id="2FAUser" action="php/Valida2FA.php" method="post">
                <h2>Segundo fator de autenticação</h2>
                <div class="inputBox">
                    <?php 
                    $perguntas = array("nomeM", "cep", "dataNasc");
                    $perguntaEscolhida = $perguntas[array_rand($perguntas)];
                    switch ($perguntaEscolhida) {
                        case "nomeM":
                            $pergunta = "Qual o nome da sua mãe?";
                            echo'<input type="text" id="NomeM" class="inputText inputLetra input2FA" required="required" name="nomeM" title="" maxlength="80" data-error="maeErro">
                            <input id="DataNasc" style="display: none;">
                            <input id="Cep" style="display: none;">
                            <span class="span-placeholder"><i class="fa-solid fa-signature"></i> Nome da mãe</span>
                            <i class="i-box"></i>
                            </div>';
                            echo'<span id="maeErro" class="span-erro">O campo "nome da mãe" deve possuir entre 15 e 80 caracteres alfabéticos</span>';
                            break;
                        case "cep":
                            $pergunta = "Qual o seu CEP?";
                            echo'<input type="text" id="Cep" class="inputText input2FA" required="required" name="cep" title="" maxlength="9" data-error="cepErro">
                            <input id="DataNasc" style="display: none;">
                            <input id="NomeM" style="display: none;">
                            <span class="span-placeholder"><i class="fa-solid fa-house"></i> CEP</span>
                            <i class="i-box"></i>
                            </div>';
                            echo'<span id="cepErro" class="span-erro">O campo "CEP" deve ser preenchido seguindo o exemplo: 12345-789</span>';
                            break;
                        case "dataNasc":
                            $pergunta = "Qual sua data de nascimento?";
                            echo'<input type="text" id="DataNasc" class="inputText input2FA" required="required" name="dataNasc" title="" maxlength="10" data-error="nascimentoErro">
                            <input id="NomeM" style="display: none;">
                            <input id="Cep" style="display: none;">
                            <span class="span-placeholder"><i class="fa-regular fa-calendar"></i> Data de nascimento</span>
                            <i class="i-box"></i>
                            </div>';
                            echo'<span id="nascimentoErro" class="span-erro">O campo "data de nascimento" deve ser preenchido corretamente</span>';
                            break;
                    }
                ?>
                <div class="form-botoes">
                    <input type="reset" class="botao-form" value="Resetar">
                    <input type="submit" class="botao-form" value="Enviar">
                </div>
            </form>
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