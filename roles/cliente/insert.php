<?php include '../inc/header.php'; ?>
<div class="container" style="margin-top:10px">
  <form class="form-horizontal" method="post" action="login.php">
  	<input type="hidden" name="loginUser">
    <div class="form-group">
      <label for="nome" class="col-sm-2 col-sm-offset-2 control-label" style="text-align:left">Nome do projeto</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="nome" placeholder="Nome do projeto" name="nome">
      </div>
    </div>

    <div class="form-group">
      <label for="password" class="col-sm-2 col-sm-offset-2 control-label" style="text-align:left">Senha</label>
      <div class="col-sm-7">
        <input type="password" class="form-control" id="password" placeholder="Senha" name="password">
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
<?php include '../inc/footer.php'; ?>