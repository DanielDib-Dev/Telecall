# Projeto Acadêmico Unisuam 1° e 2° semestre
 
## Projeto acadêmico em parceria com a empresa Telecall. Oficialmente meu primeiro site, foi aqui onde comecei a explorar as tags e estilizações, além de funções criadas com o javascript, as que mais se destacam são o dark-mode e a acessibilidade de fontes. Fora isso há também as páginas de formulários, com validações e máscaras de inputs funcionando bem. Agora em meu segundo período da faculdade, estou dando continuidade ao projeto, implementando o back-end em PHP e MySQL.

* A conexão com o banco de dados é feito pelo arquivo php/Conexao.php, que facilita para evitar a repetição de código, tendo apenas que dar um include nas outras páginas.

* No back-end fora implementadas diversas funções, agora o cadastro é feito no arquivo Cadastro.php e processado no php/SalvarUser.php, Isso salva as informações do usuário no banco de dados.

* O login é feito na página Login.php e processado em php/LogarUser.php, esse arquivo faz a comparação entre os dados inseridos no site e os dados salvos no banco de dados, caso os dados estejam corretos, e o usuário seja perfil master, ele é logado. Caso o usuário seja perfil comum, ele é redirecionado para o 2FAUser.php que quando preenchido, envia os dados para php/Valida2FA.php, que compara a resposta inserida na página de 2FA com os dados salvos no banco de dados, caso esteja correto, o usuário é logado com sucesso.

* Após o login, o usuário passa a ter acesso a algumas páginas que não tinha anteriormente.
    - O master e o comum tem acesso a:
        - ModeloDB.php - como descrito nos requisitos do projeto, os dois perfis têm acesso a essa página, é uma página que serve apenas para expor o modelo do banco de dados;
        - Páginas de serviços 2FA.php, GVC.php, NumeroMascara.php e SMS.php - São páginas de informações sobre os serviços da empresa;
        - Perfil.php - é uma página que exibe algumas informações sobre o perfil logado.

    - Apenas o master tem acesso:
        - ConsultaUsuario.php - é uma página que serve para a pesquisa de usuários de perfil comum registrados no banco de dados, tendo a opção de exportar como pdf ou excluir determinado usuário do banco de dados pelo arquivo php/ExcluirUsuario.php, a página conta com um campo de pesquisa, onde é possível pesquisar por substring do nome do usuário.

    - Apenas o comum tem acesso:
        - AlteraSenha.php - caso o usuário seja comum, na página Perfil.php haverá uma opção para alterar a senha. Caso preenchido corretamente, a nova senha é salva por meio do php/ProcessaAlteraSenha.php.

* Após logar, é disponibilizado o botão de deslogar na navbar, que utiliza o arquivo php/Deslogar.php para excluir os dados da sessão.

* O site também conta com a página erro.php, que é usada quando um usuário que não tem acesso a determinada página tenta acessá-la, como por exemplo, um perfil comum tentando acessar a página de ConsultaUsuário.php.

* Os arquivos header.php e footer.php, servem apenas para unificar o header e o footer em apenas u marquivo, dessa forma caso seja necessário a alteração no header, por exemplo, não precisará modificá-lo em cada página do site.

Fora isso: 
* Todas as imagens utilizadas no site são armazenadas na pasta "imagens";
* Todo o javascript do site está na pasta "java";
* O script para a criação do banco de dados está na pasta "banco de dados";