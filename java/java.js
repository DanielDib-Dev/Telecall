// Tela de bloqueio SMS programável
var currentPath = location.pathname;

if (currentPath.includes("SMS.php")) {
  var div = document.getElementById('tela-bloqueio');
  var label1 = document.getElementsByClassName('label-telefone')[1];
  var label2 = document.getElementsByClassName('label-telefone')[2];
  var label3 = document.getElementsByClassName('label-telefone')[3];
  var label4 = document.getElementsByClassName('label-telefone')[4];

  div.addEventListener('click', function() {
    div.classList.add('invisivel');
  });

  label1.addEventListener('click', function() {
    div.classList.add('invisivel');
  });

  label2.addEventListener('click', function() {
    div.classList.add('invisivel');
  });

  label3.addEventListener('click', function() {
    div.classList.add('invisivel');
  });

  label4.addEventListener('click', function() {
    div.classList.add('invisivel');
  });
}

//Dark-Mode
$(document).ready(function() {
  var darkMode = localStorage.getItem("darkMode");

  if (darkMode === "true") {
    enableDarkMode();
  }

  $(".checkbox-dark-mode").change(function() {
    if ($(this).is(":checked")) {
      enableDarkMode();
      localStorage.setItem("darkMode", "true");
    } else {
      disableDarkMode();
      localStorage.removeItem("darkMode");
    }
  });

  function enableDarkMode() {
    $("body").css("--cor-fundo", "#141414");
    $("body").css("--cor-fundo2", "#111111");
    $("body").css("--cor-letra", "#FFFFFF");
    $("body").css("--cor-letra2", "#000000");
    $("body").css("--cor-h1", "#ca1c2a");
    $("body").css("--cor-fundinho", "#ffc8c8");
    $("body").css("--cor-nav", "#003b71");
    $("body").css("--cor-navhover", "#002b61");
    $("body").css("--cor-celularnoti", "#202020a6");
    $(".dark-img").css("filter", "brightness(10)");
    $(".invert-img").css("filter", "invert(100%)");
    $(".soft-invert-img").css("filter", "invert(85%)");
    $(".red-img").css("filter", "hue-rotate(155deg) saturate(300%)");
    $(".content-cliente").css("background", "var(--cor-fundo2) url(../Projeto/imagens/bg2.png)");
  }

  function disableDarkMode() {
    $("body").css("--cor-fundo", "#FFFFFF");
    $("body").css("--cor-fundo2", "#dde8ff");
    $("body").css("--cor-letra", "#000000");
    $("body").css("--cor-letra2", "#FFFFFF");
    $("body").css("--cor-h1", "#003b71");
    $("body").css("--cor-fundinho", "#c8daff");
    $("body").css("--cor-nav", "#ca1c2a");
    $("body").css("--cor-navhover", "#b81b28");
    $("body").css("--cor-celularnoti", "#bdbdbda6");
    $(".dark-img").css("filter", "brightness(0)");
    $(".invert-img").css("filter", "invert(0%)");
    $(".soft-invert-img").css("filter", "invert(0%)");
    $(".red-img").css("filter", "none");
    $(".content-cliente").css("background", "var(--cor-fundo2) url(../Projeto/imagens/bg.png)");
  }
});

//Muda a posição do interruptor do dark mode
$(document).ready(function() {
  var checkbox = $(".checkbox-dark-mode");

  var isChecked = localStorage.getItem("darkModeChecked");

  if (isChecked === "true") {
    checkbox.prop("checked", true);
  }

  checkbox.change(function() {
    if ($(this).is(":checked")) {
      localStorage.setItem("darkModeChecked", "true");
    } else {
      localStorage.setItem("darkModeChecked", "false");
    }
  });
});


//Saiba mais do mapa do Index.php

if (currentPath.includes("index.php")) {
  const saiba_mais = document.getElementById('map-saibamais');
  const map_move = document.getElementById('map-move');
  saiba_mais.addEventListener('click', function() {
    map_move.classList.toggle('map-show');
  });
}

//scroll pro top

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}


//Área do cliente

if (window.location.pathname.includes("Cadastro.php") || window.location.pathname.includes("Login.php")) {
    function manterAberto(valor) {
        const inputElement = $(valor);
        const iBoxElement = inputElement.siblings(".i-box");
        const spanPlaceholderElement = inputElement.siblings(".span-placeholder");
        const faEyeElement = inputElement.siblings(".fa-eye");
        if (valor.value.length > 0) {
            iBoxElement.addClass("i-has-value");
            spanPlaceholderElement.addClass("span-has-value");
            faEyeElement.addClass("fa-eye-visivel");
        } else {
            iBoxElement.removeClass("i-has-value");
            spanPlaceholderElement.removeClass("span-has-value");
            faEyeElement.removeClass("fa-eye-visivel");
        }
    }
}

//validação dos campos
if (currentPath.includes("Cadastro.php")) {
  $(document).ready(function() {
  //validação do usuário  
      $('#Usuario').keyup(function () {
        const usuario = $(this).val().trim();

        if (usuario.length !== 6) {
          $('#userErro').css('display', 'inline');
        }else{
          $('#userErro').css('display', 'none');
        }
      });

  //validação do nome 
  $('#Nome').keyup(function () {
    const nome = $(this).val().trim();

    if (nome.length < 15) {
      $('#nomeErro').css('display', 'inline');
    }else{
      $('#nomeErro').css('display', 'none');
    }
  });
  //validação do cpf  
  function validarCPF(cpf) {
    cpf = cpf.replace(/\D/g, '');

    if (cpf.length !== 11 ||
        cpf === '00000000000' ||
        cpf === '11111111111' ||
        cpf === '22222222222' ||
        cpf === '33333333333' ||
        cpf === '44444444444' ||
        cpf === '55555555555' ||
        cpf === '66666666666' ||
        cpf === '77777777777' ||
        cpf === '88888888888' ||
        cpf === '00000000191' ||
        cpf === '12345678909' ||
        cpf === '99999999999') {
      return false;
    }

    let soma = 0;
    let resto;

    for (let i = 1; i <= 9; i++) {
      soma += parseInt(cpf.substring(i - 1, i)) * (11 - i);
    }

    resto = (soma * 10) % 11;

    if (resto === 10 || resto === 11) {
      resto = 0;
    }

    if (resto !== parseInt(cpf.substring(9, 10))) {
      return false;
    }

    soma = 0;

    for (let i = 1; i <= 10; i++) {
      soma += parseInt(cpf.substring(i - 1, i)) * (12 - i);
    }

    resto = (soma * 10) % 11;

    if (resto === 10 || resto === 11) {
      resto = 0;
    }

    if (resto !== parseInt(cpf.substring(10, 11))) {
      return false;
    }

    return true;
  }

  const form = document.getElementById('cadastro');
  const cpf = document.getElementById('CPF');
  const cpfErro = document.getElementById('cpfErro');

  cpf.addEventListener('input', function() {
    const cpfValue = cpf.value;

    if (validarCPF(cpfValue)) {
      cpfErro.style.display = 'none';
    } else {
      cpfErro.style.display = 'inline';
    }
  });

  form.addEventListener('submit', function(event) {
    const cpfValue = cpf.value;

    if (!validarCPF(cpfValue)) {
      event.preventDefault(); // Impede o envio do formulário
      cpfErro.style.display = 'inline';
    }
  });

  //validação do nascimento  
  $('#DataNasc').keyup(function() {
    var nascimento = $(this).val();

    // Verifica se a entrada tem 10 caracteres
    if (nascimento.length === 10) {
      var inputAno = nascimento.slice(-4);
      var anoAtual = new Date().getFullYear();
      var diferencaAnos = anoAtual - parseInt(inputAno);

      if (diferencaAnos >= 18 && diferencaAnos <= 100) {
        $('#nascimentoErro').css('display', 'none');
      } else {
        $('#nascimentoErro').css('display', 'inline');
      }
    }else{
      $('#nascimentoErro').css('display', 'inline');
    }
  });
  //validação do genero
    //já possui
  //validação do nome da mãe  
  $('#NomeM').keyup(function () {
    const mae = $(this).val().trim();

    if (mae.length < 15) {
      $('#maeErro').css('display', 'inline');
    }else{
      $('#maeErro').css('display', 'none');
    }
  });
  //validação do fixo  
  $('#Tel').keyup(function () {
    const fixo = $(this).val().trim();

    if (fixo.length === 16) {
      $('#fixoErro').css('display', 'none');
    }else{
      $('#fixoErro').css('display', 'inline');
    }
  });
  //validação do celular  
  $('#Cel').keyup(function () {
    const celular = $(this).val().trim();

    if (celular.length === 16) {
      $('#celularErro').css('display', 'none');
    }else{
      $('#celularErro').css('display', 'inline');
    }
  });
  //validação do endereço  
  $('#Endereco').keyup(function () {
    const endereco = $(this).val().trim();

    if (endereco.length > 5) {
      $('#enderecoErro').css('display', 'none');
    }else{
      $('#enderecoErro').css('display', 'inline');
    }
  });
  //validação do senha    
  $('#Senha').keyup(function () {
    const senha = $(this).val().trim();

    if (senha.length === 8) {
      $('#senhaErro').css('display', 'none');
    }else{
      $('#senhaErro').css('display', 'inline');
    }
  });
  //validação do confirma senha      
  if (currentPath.includes("Cadastro.php")) {
    $(document).ready(function() {
      $('.inputPassword').keyup(function() {
        var senha = $('#Senha').val();
        var confirmaSenha = $('#Confirma').val();
    
        if (senha === confirmaSenha) {
          $('#confirmaErro').css('display', 'none');
        } else {
          $('#confirmaErro').css('display', 'inline');
        }
      });
    });
    
  }
});
}

//Apenas letras input

if (window.location.pathname.includes("Cadastro.php") || window.location.pathname.includes("Login.php")) {
$(document).ready(function() {
  $('.inputLetra').on('input', function() {
    var inputValue = $(this).val();
    var sanitizedValue = inputValue.replace(/[^a-zA-Z\s]/g, '');
    $(this).val(sanitizedValue);
  });
});
}

//Apenas números input

if (window.location.pathname.includes("Cadastro.php") || window.location.pathname.includes("Login.php")) {
  $(document).ready(function() {
    $('.inputNum').on('input', function() {
      var inputValue = $(this).val();
      var sanitizedValue = inputValue.replace(/[^\d\+\(\)\-]/g, '');
      $(this).val(sanitizedValue);
    });
  });
  }
  
//Máscara de cpf
if (window.location.pathname.includes("Cadastro.php")){

  // Função para adicionar a máscara de CPF
  function formatCPF(cpf) {
    cpf = cpf.replace(/\D/g, ''); // Remove caracteres não numéricos
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona ponto após os primeiros 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona ponto após os segundos 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona hífen antes dos últimos 2 dígitos
    return cpf;
  }

  // Função para atualizar a máscara quando o valor do campo é alterado
  function updateCPFFormat() {
    var cpfInput = document.getElementById('CPF');
    cpfInput.value = formatCPF(cpfInput.value);
  }

  // Adiciona um evento de input ao campo para atualizar a máscara
  var cpfInput = document.getElementById('CPF');
  cpfInput.addEventListener('input', updateCPFFormat);

  //Máscara nascimento

    function formatarNascimento(nascimento) {
      nascimento = nascimento.replace(/\D/g, ''); // Remove caracteres não numéricos
      nascimento = nascimento.replace(/(\d{2})(\d)/, '$1/$2'); // Adiciona barra após os primeiros 2 dígitos
      nascimento = nascimento.replace(/(\d{2})(\d)/, '$1/$2'); // Adiciona barra após os segundos 2 dígitos
      return nascimento;
    }

    function atualizarFormatoNascimento() {
      var nascimentoInput = document.getElementById('DataNasc');
      nascimentoInput.value = formatarNascimento(nascimentoInput.value);
    }

    var nascimentoInput = document.getElementById('DataNasc');
    nascimentoInput.addEventListener('input', atualizarFormatoNascimento);

  //Máscara fixo

  const telefoneInput = document.getElementById('Tel');

        telefoneInput.addEventListener('focus', function () {
          if (telefoneInput.value === '') {
            telefoneInput.value = '(+55)';
          }
        });

        telefoneInput.addEventListener('input', function () {
          const telefone = telefoneInput.value.replace(/\D/g, ''); // remove caracteres não numéricos

          if (telefone.length === 0) {
            telefoneInput.value = '(+55)';
          } else if (telefone.length === 6) {
            const formatado =
              '(+55)' + telefone.substring(2, 4) + '-' + telefone.substring(4, 12);
            telefoneInput.value = formatado;
          } 
        });

  //Máscara celular

  const celularInput = document.getElementById('Cel');

        celularInput.addEventListener('focus', function () {
          if (celularInput.value === '') {
            celularInput.value = '(+55)';
          }
        });

        celularInput.addEventListener('input', function () {
          const celular = celularInput.value.replace(/\D/g, ''); // remove caracteres não numéricos

          if (celular.length === 0) {
            celularInput.value = '(+55)';
          } else if (celular.length === 6) {
            const formatado =
              '(+55)' + celular.substring(2, 4) + '-' + celular.substring(4, 12);
              celularInput.value = formatado;
          } 
        });
      }   

//Ver senha

$(document).ready(function() {
  $('.fa-eye').mousedown(function() {
    const inputSenha = $(this).siblings('.inputText');
    inputSenha.attr('type', 'text');
  });

  $('.fa-eye').mouseup(function() {
    const inputSenha = $(this).siblings('.inputText');
    inputSenha.attr('type', 'password');
  });
});

// Impedir o envio do formulário se algum erro estiver visível
$('#cadastro').on('submit', function(event) {
  // Verifique se qualquer um dos erros está visível
  if ($('#userErro').css('display') !== 'none') {
    alert('Corrija o usuário.');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#nomeErro').css('display') !== 'none') {
    alert('Corrija o nome');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#cpfErro').css('display') !== 'none') {
    alert('Corrija o cpf');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#nascimentoErro').css('display') !== 'none') {
    alert('Corrija o nascimento');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#generoErro').css('display') !== 'none') {
    alert('Corrija o genero');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#maeErro').css('display') !== 'none') {
    alert('Corrija o nome da mãe');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#fixoErro').css('display') !== 'none') {
    alert('Corrija o telefone fixo');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#celularErro').css('display') !== 'none') {
    alert('Corrija o celular');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#enderecoErro').css('display') !== 'none') {
    alert('Corrija o endereço');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#senhaErro').css('display') !== 'none') {
    alert('Corrija a senha');
    event.preventDefault(); // Impede o envio do formulário
  }
  else if ($('#confirmaErro').css('display') !== 'none') {
    alert('Corrija a confirmação de senha');
    event.preventDefault(); // Impede o envio do formulário
  } 
  else{
    document.getElementById('cadastro').submit();
  }
});

//Cadastro realizado com sucesso
if (currentPath.includes("cadastro.php")) {  
  $(document).ready(function() {
  const urlParams = new URLSearchParams(window.location.search);
          const successParam = urlParams.get("success");
          // Exibe o modal se o parâmetro "success" estiver presente
          if (successParam === "true") {
              document.getElementById("modal").style.display = "block";
          }
  });
}

if (currentPath.includes("Login.php")) {
//Falha no login
$(document).ready(function() {
  const urlParams = new URLSearchParams(window.location.search);
          const successParam = urlParams.get("success");
          // Exibe o modal se o parâmetro "success" estiver presente
          if (successParam === "false") {
              document.getElementById("modal-erro").style.display = "block";
          }
  });

//Sucesso no login
$(document).ready(function() {
  const urlParams = new URLSearchParams(window.location.search);
          const successParam = urlParams.get("success");
          // Exibe o modal se o parâmetro "success" estiver presente
          if (successParam === "true") {
              document.getElementById("modal-sucesso").style.display = "block";
          }
  });
}
//acessibilidade de fontes

$(document).ready(function() {
  var fontKey = 'font-size'; // Chave utilizada para armazenar no Local Storage
  var defaultFontSize = 16; // Tamanho padrão da fonte

  // Função para definir o tamanho da fonte
  function setFontSize(size) {
    $('body').find('p, li').not('header *').not('#tela-bloqueio *').css('font-size', size + 'px');
  }

  // Verifica se há um tamanho de fonte armazenado e aplica
  var storedFontSize = localStorage.getItem(fontKey);
  if (storedFontSize) {
    setFontSize(parseInt(storedFontSize));
  }

  $('#aumentarFonte').click(function() {
    $('body').find('p, li').not('header *').not('#tela-bloqueio *').css('font-size', function(index, value) {
      var currentSize = parseInt(value);
      var newSize = currentSize + 4;
      var maxSize = 28; // Tamanho máximo desejado

      if (newSize > maxSize) {
        newSize = maxSize;
      }

      // Armazena o novo tamanho da fonte no Local Storage
      localStorage.setItem(fontKey, newSize);

      return newSize + 'px';
    });
  });

  $('#diminuirFonte').click(function() {
    setFontSize(defaultFontSize); // Redefine o tamanho da fonte para o tamanho padrão

    // Remove o valor do tamanho de fonte armazenado no Local Storage
    localStorage.removeItem(fontKey);
  });
});


//animações de scroll
document.addEventListener('DOMContentLoaded', function () {
  AOS.init();
});