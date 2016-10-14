<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container" style="margin-top:140px">
		<div class="col-md-offset-4 col-md-4">
    	<div class="col-md-10 col-md-offset-1" style="text-align:center; padding:20px 0px;">
    		<h4>Painel de Controle</h4>
    	</div>
  		<form class="form-horizontal" method="post" action="login.php">
  			<input type="hidden" name="loginUser">
        <div class="form-group">
          <label for="login" class="col-sm-2 col-sm-offset-2 control-label" style="text-align:left">Email</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="login" placeholder="Email" name="email">
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-sm-2 col-sm-offset-2 control-label" style="text-align:left">Senha</label>
          <div class="col-sm-7">
            <input type="password" class="form-control" id="password" placeholder="Senha" name="password">
          </div>
        </div>

        <div class="form-group">
          <label for="type" class="col-sm-2 col-sm-offset-2 control-label" style="text-align:left">Tipo</label>
          <div class="col-sm-7">
            <select id="type" class="form-control" name="type">
            	<option>Tipo de usuario</option>
            	<option value="CLI">Cliente</option>
            	<option value="DEV">Desenvolvimento</option>
            	<option value="FIN">Financeiro</option>
            	<option value="MAR">Marketing</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-9 col-sm-offset-2">
            <input type='submit' class="form-control text-center bnt btn-primary" id="inputSubmit" value="Acessar">
          </div>
        </div>

        <div class="row">
	      	<center><p class="bg-danger"><?php if(isset($_GET['loged']) && $_GET['loged'] === 'false') { echo "Usuário/Senha inválido"; }?></p></center> 
	      </div>
      </form>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>