<script src="js/jquery.js"></script>

    $('[name=tamanho]').on('input', function(){
    $('[name=valortamanho]').val(this.value);
});

    $('.novidades').addClass('painel-compacto');
    $('.novidades button').click(function() {
    $('.novidades').removeClass('painel-compacto');
});

document.querySelectorAll('#form-busca').onsubmit = function() {
    if (document.querySelectorAll('#q').value == '') {
        document.querySelectorAll('#form-busca').style.background = 'onfocus';
        return false;
    }
};

var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];

var bannerAtual = 0;

function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelectorAll('.destaque img').src = banners[bannerAtual];
}

var timer = setInterval(trocaBanner, 4000);

var controle = document.querySelectorAll('.pause');

controle.onclick = function() {
    if (controle.className == 'pause') {
        clearInterval(timer);
        controle.className = 'play';
    } else {
        timer = setInterval(trocaBanner, 4000);
        controle.className = 'pause';
    }
    return false;
};

document.querySelector('form input').oninvalid = function(evt) {
    // cancela comportamento padrão do browser
    evt.preventDefault();
    // checa validade e mostra alert
    if (!this.validity.valid) {
    alert("Nome obrigatório!");
    }
};

this.setCustomValidity("");
    // reexecuta validação
    if (!this.validity.valid) {
    // se inválido, coloca mensagem de erro
    this.setCustomValidity("Email inválido");
    }   
};

document.querySelector('input[type=email]').oninvalid = function() {
    // remove mensagens de erro antigas
    this.setCustomValidity("");
    // reexecuta validação
    if (!this.validity.valid) {
    // se inválido, coloca mensagem de erro
    this.setCustomValidity("Email inválido");
    }
};

