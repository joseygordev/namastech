<?php 
	session_start();	
	require_once '../../funcoes/funcoes.php'; 
	$loginCheck = loginCheck();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="col-md-10 col-xs-6">
			  <ul class="nav nav-bar">
			  	<li style="margin-top:17px">Bem Vindo <b><?php echo utf8_encode($_SESSION['nameUser']); ?></b></li>
			  </ul>
			</div>

			<div class="col-md-2 col-xs-6">
			   <ul class="nav navbar-nav nav-pills navbar-right" role="tablist">
			<!--   		<li role="presentation" class="alert-danger" id='msgAlerta'>
			  			<a href="#" id="alerta" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Um trabalho requer sua atenção.">
			          Alerta
			          <span class="badge">1</span>
			        </a>
			  		</li> -->
			       <li><a href="../../login.php?q=logout">Sair</a></li>
			   </ul>
			</div>
		</div>
	</nav>
