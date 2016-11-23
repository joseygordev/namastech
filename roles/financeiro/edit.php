<?php 
  include '../inc/header.php'; 
  include '../../config/config.php';

  $id = $_GET['id'];

  if (isset($_POST['id_valor'])) {

    $valorSeted = str_replace('R$ ', '', $_POST['valor']);
  
    $sql = "UPDATE financeiro SET status_id = '".$_POST['status_id']."', valor = '".$valorSeted."' WHERE id = '".$_POST['id_valor']."'";
    $resultado = mysqli_query($connect, $sql);

    if ($resultado) {
      $sql = "UPDATE projeto SET observacao = '".utf8_decode($_POST['observacao'])."' WHERE id = '".$_POST['id_valor']."'";
      $resultado = mysqli_query($connect, $sql);
      if ($resultado) {
        $urlLocation = 'edit.php?id='.$id.'';
        header('Location: ' . $urlLocation);
      }
    }
  }

  function getBudget($id, $connect) {
    $sql = "SELECT 
            F.*,
            S.nome
          FROM 
            financeiro F 
          INNER JOIN 
            status S 
          ON 
            F.status_id = S.id
          ORDER BY
            id desc
          ";

    $result = mysqli_query($connect, $sql); 
    $consult = mysqli_fetch_all($result, MYSQLI_ASSOC);  
    return $consult;
  }

  function getProject($id, $connect) {
    $sql = "SELECT 
            P.*,
            F.valor,
            F.id AS idValor,
            F.status_id
          FROM 
            projeto P
          INNER JOIN
            financeiro F
          ON
            F.id_projeto = P.id
          WHERE
            P.id = '".$id."'
          ORDER BY
            F.id desc
          ";

    $result = mysqli_query($connect, $sql); 
    $consult = mysqli_fetch_array($result);  

    return $consult;
  }

  function getStatus($id, $connect) {
    $sql = "SELECT 
            *
          FROM 
            status 
          ";

    $result = mysqli_query($connect, $sql); 
    $consult = mysqli_fetch_all($result, MYSQLI_ASSOC);  

    return $consult;
  }

  $resultBudget = getBudget($id, $connect);
  $resultProject = getProject($id, $connect);
  $resultStatus = getStatus($id, $connect);

?>
<div class="container" style="margin-top:10px">
  <a class="btn btn-default" href="index.php" role="button">voltar</a>
	<div class="row" style="margin-top:10px">
		<form class="col-md-6" method="post">
      <input type="hidden" name="id_valor" value="<?php echo $resultProject['idValor'] ?>">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th colspan="2" class="col-md-12 text-center info">INFORMAÇÕES DO PROJETO</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="col-md-3">O.S</th>
							<th><?php echo $resultProject['cod_projeto'] ?></th>
						</tr>
						<tr>
							<th class="col-md-3">Quantidade</th>
							<th><?php echo $resultProject['quantidade'] ?></th>
						</tr>
						<tr>
							<th class="col-md-3">Cliente</th>
							<th><?php echo utf8_encode($resultProject['nome_cliente']) ?></th>
						</tr>
						<tr>
							<th class="col-md-3">Trabalho</th>
							<th><?php echo utf8_encode($resultProject['descricao']) ?></th>
						</tr>
						<tr>
							<th class="col-md-3">Status</th>
							<th>
								<select name="status_id" class="form-control">
                  <?php  
                    foreach($resultStatus as $item) {
                      if ($item['id'] === $resultProject['status_id']) {
                        $selected = 'selected';
                      } else {
                        $selected = '';
                      }
                      echo '<option value="'.$item['id'].'" '.$selected.'>'.utf8_encode($item['nome']).'</option> ';
                    }
                  ?>
								</select>
							</th>
						</tr>
						<tr>
							<th>
								Valor: 
							</th>
							<th>
								<input type="text" name="valor" class="form-control" value="R$ <?php echo $resultProject['valor'] ?>">
							</th>
						</tr>
						<tr>
							<th>
								Obs:
							</th>
							<th>
								<textarea class="form-control" name="observacao" rows="5" placeholder="Descreva para o cliente, todas as caracteristicas do orçamento."><?php echo utf8_encode($resultProject['observacao']) ?></textarea>
							</th>
						</tr>
					</tbody>
				</table>
			</div>
      <button type="submit" class="btn btn-success" style="float:right; padding:10px 40px; margin-bottom:10px">Solicitar Aprovação</button>
		</form>
		<div class="col-md-6">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th colspan="3" class="col-md-12 text-center danger">ORÇAMENTOS REPROVADOS</th>
						</tr>
						<tr>
							<th>Tipo</th>
							<th>Valor</th>
							<th>Data</th>
						</tr>
					</thead>
					<tbody>
						<?php 
              foreach($resultBudget as $item) {
                if ($item['aprovado'] == 0 && !is_null($item['aprovado'])) {
                  echo '<tr>
                    <td>'.utf8_encode($item['nome']).'</td>
                    <td>'.$item['valor'].'</td>
                    <td>'.$item['data'].'</td>
                  ';
                }
              }
            ?>
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- row -->
  <a class="btn btn-default" href="index.php" role="button">voltar</a>
</div>
<?php include '../inc/footer.php'; ?>
