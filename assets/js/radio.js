AJAX = {
	GET(url, func_success, func_error) {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				func_success(xhttp.response);
			} else if (xhttp.readyState == 4 && xhttp.status !== 200) {
				func_error();
			}
		};
		xhttp.open("GET", url, true);
		xhttp.send();
	}
}
document.getElementById("player_audio").volume = 0.5;
function player() {
	let player = document.getElementById("player_audio");
	let icon_control = document.getElementById("icon_control");
	if (player.dataset.status == 'tocando') {
		player.pause();
		player.dataset.status = 'pausada';
		icon_control.setAttribute('class', 'fas fa-play');
	} else {
		player.play();
		player.dataset.status = 'tocando';
		icon_control.setAttribute('class', 'fas fa-pause');
	}
}
function abaixar() {
	document.getElementById("player_audio").volume -= 0.1;
}
function aumentar() {
	document.getElementById("player_audio").volume += 0.1;
}
function reset() {
	var player = document.getElementById("player_audio");
	var src = player.src;
	player.dataset.status = 'pausado';
	player.pause();
	player.src = '';
	player.src = src;
	player.dataset.status = 'tocando';
	player.play();
}
var success = function(response) {
	let data = JSON.parse(response);
	var status = data.status;
	var porta = data.porta;
	var porta_dj = data.porta_dj;
	var ip = data.ip;
	var ouvintes_conectados = data.ouvintes_conectados;
	var titulo = data.titulo;
	var plano_ouvintes = data.plano_ouvintes;
	var plano_ftp = data.plano_ftp;
	var plano_bitrate = data.plano_bitrate;
	var musica_atual = data.musica_atual;
	var proxima_musica = data.proxima_musica;
	var genero = data.genero;
	var shoutcast = data.shoutcast;
	var rtmp = data.rtmp;
	var rtsp = data.rtsp;
	var capa_musica = data.capa_musica;
	var locutor = data.locutor;
	var programa = data.programa;

	let mus_atual = document.querySelector("#player_musica_atual");
	let locutor_html = document.querySelector("#player_locutor_atual");
	let programa_html = document.querySelector("#player_programa_atual");
	let ouvintes_html = document.querySelector("#player_ouvintes");

	if (typeof musica_atual == 'object' || mus_atual == '') {
		mus_atual.innerHTML = 'Nenhuma música está sendo tocada.';
	} else {
		mus_atual.innerHTML = `Tocando agora: "${musica_atual}"`;
	}

	locutor_html.innerHTML = locutor;
	programa_html.innerHTML = programa;
	ouvintes_html.innerHTML= ouvintes_conectados;
}
var error = function() {

}
var funcao_radio = function() {
	let data = AJAX.GET('https://sandbox.exbrhbofc.net/habblando/api.php', success, error);
}
funcao_radio();
setInterval(funcao_radio, 3000);