<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>CPaaS Platform - Consulta de Usuário</title>
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
    <div id="content">
        <div class="consulta-table">
            <h1>Lista de Usuários</h1>
            <div class="pesquisa-table">
                <label for="pesquisa">Pesquisar por nome:</label>
                <input class="pesquisa-input" type="text" id="pesquisa" placeholder="Digite o nome">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nome do Usuário</th>
                        <th class="delete-coluna">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Márcio de eticeteras e tal</td>
                        <td class="delete-icon"><i class="fa-solid fa-trash"></i></td>
                    </tr>
                </tbody>
            </table>
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