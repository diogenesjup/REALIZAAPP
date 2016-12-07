<!--
#
# DIOGENES OLIVEIRA DOS SANTOS JUNIOR
# WWW.DIOGENESJUNIOR.COM.BR
# CONTATO@DIOGENESJUNIOR.COM.BR
#
-->
<!DOCTYPE html>
<html lang="pt-br"><head>
<title>Realiza app</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- DESCRIÇÃO DO SITE -->
<meta name="description" content="Coloque aqui a descrição do site" />
<!-- PALAVRAS CHAVE -->
<meta name="keywords" content="coloque aqui as palavras chave separadas por virgula" />

<!-- FAVICON -->
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />

<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta name="theme-color" content="#2a7090">


<!-- ICONES -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">


</head>
<body>
    


<div class="container">
	<div class="row">
		<div class="col-xs-12 logo text-center">
			<img src="images/empresa-logo.png" alt="Realiza app">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 login">
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Fazer login</button>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 text-center">
			<small>&copy; <?php echo date("Y"); ?> Realizagrupo.</small>
		</div>
	</div>
</div>
   






<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">

        <div class="form-group">
        	<label>Usuário de acesso:</label>
        	<input type="text" name="usuario" class="form-control" placeholder="Usuário de acesso">
        </div>

        <div class="form-group">
        	<label>Senha de acesso:</label>
        	<input type="password" name="senha" class="form-control" placeholder="Senha de acesso">
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="location.href='dashboard.php';">Entrar</button>
      </div>
    </div>
  </div>
</div>











    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>
