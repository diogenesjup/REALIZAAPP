function verificarLogin(){
	var login = $("#usuario").val();
	var senha = $("#senha").val();

	var request = $.ajax({
        method: "GET",
        url: "http://realizagrupo.com.br/app/verificar-login.php?login="+login+"&senha="+senha
        //data: { email: login, senha: senha }
    })
    request.done(function (msg) {

       msg = JSON.parse(msg);

        console.log("status: "+msg["status"]);

        if(msg["status"]=="LOGIN-NEGADO"){
        	alert("Login ou Senha incorretos");
        }

        if(msg["status"]=="LOGIN-OK"){
        	localStorage.setItem("ClienteId", msg["id"]);
        	location.href="dashboard.html";
        }

    });
    request.fail(function () {
        console.log("Ocorreu um erro ao tentar realizar o login na plataforma");
        alert("Ocorreu um erro ao tentar se comunicar com o servidor RealizaApp")
    });

}



function loadDashboard(){
    
    var idUser = localStorage.getItem("ClienteId");

    if(idUser==""){
    	location.href="index.html";
    }

	var request = $.ajax({
        method: "GET",
        url: "http://realizagrupo.com.br/app/get-nomeusuario.php?id="+idUser
        //data: { email: login, senha: senha }
    })
    request.done(function (msg) {

       msg = JSON.parse(msg);

        console.log("Nome do Colaborador: "+msg["nome"]);

        $("#nomeUsuario").html(msg["nome"]);

    });
    request.fail(function () {
        console.log("Ocorreu um erro ao tentar obter o nome do colaborador plataforma");
        alert("Ocorreu um erro com a comunicação do servidor Realiza. Por favor, faça seu login novamente.");
        location.href="index.html";
    });

}



function loadCartas(){

	var idUser = localStorage.getItem("ClienteId");


	var request = $.ajax({
        method: "GET",
        url: "http://realizagrupo.com.br/app/get-cartas.php?id="+idUser
        //data: { email: login, senha: senha }
    })
    request.done(function (msg) {

       $("#areaCartas").html(msg);

    });
    request.fail(function () {
        console.log("Ocorreu um erro ao tentar obter as cartas na plataforma");
    });

}



function loadPostos(){

	var idUser = localStorage.getItem("ClienteId");

	var request = $.ajax({
        method: "GET",
        url: "http://realizagrupo.com.br/app/get-postos.php?id="+idUser
        //data: { email: login, senha: senha }
    })
    request.done(function (msg) {

       $("#areaPostos").html(msg);

    });
    request.fail(function () {
        console.log("Ocorreu um erro ao tentar obter o os postos na plataforma");
    });

}


function verCarta(codigoCarta){

    localStorage.setItem("codigoCarta", codigoCarta);
    location.href = "ver-carta.html";

}

function loadPdf(){

    var codigoCarta = localStorage.getItem("codigoCarta");
    var urlCarta = "http://realizagrupo.com.br/admin/pdfs/"+codigoCarta+".pdf";
    console.log("Abrindo a carta: "+urlCarta);
    //document.getElementById("pdf").src = urlCarta;

    window.open(urlCarta, '_system');

}