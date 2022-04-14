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
