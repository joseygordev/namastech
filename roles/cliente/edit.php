<?php  
  include '../inc/header.php'; 
  include '../../config/config.php';

  $id = $_GET['id'];

  if (isset($_GET['calcelP']) || isset($_GET['activedP'])) {
    if (isset($_GET['calcelP'])) {
      $method = $_GET['calcelP'];
      $actived = 0;  
    } else {
      $method = $_GET['activedP'];
      $actived = 1;  
    }

    $sql = "UPDATE projeto SET ativo = '".$actived."' WHERE id = '".$method."'";
    $resultado = mysqli_query($connect, $sql);
  } elseif (isset($_GET['calcelArt']) || isset($_GET['activedArt'])) {
    if (isset($_GET['calcelArt'])) {
      $method = $_GET['calcelArt'];
      $actived = 0;  
    } else {
      $method = $_GET['activedArt'];
      $actived = 1;  
    }

    $sql = "UPDATE desenvolvimento SET aprovado = '".$actived."' WHERE id = '".$method."'";
    $resultado = mysqli_query($connect, $sql);
  } elseif (isset($_GET['calcelOrc']) || isset($_GET['activedOrc'])) {
    if (isset($_GET['calcelOrc'])) {
      $method = $_GET['calcelOrc'];
      $actived = 0;  
    } else {
      $method = $_GET['activedOrc'];
      $actived = 1;  
    }

    $sql = "UPDATE financeiro SET aprovado = '".$actived."' WHERE id = '".$method."'";
    $resultado = mysqli_query($connect, $sql);
  } 

  function getProject($id, $connect) {
    $sql = "SELECT 
            *
          FROM 
            projeto 
          WHERE
            id = '".$id."'
          ";

    $result = mysqli_query($connect, $sql); 
    $consult = mysqli_fetch_array($result);  

    return $consult;
  }

  function getArt($id, $connect) {
    $sql = "SELECT 
            *
          FROM 
            desenvolvimento 
          WHERE
            id_projeto = '".$id."'
          ORDER BY
            id desc
          ";

    $result = mysqli_query($connect, $sql); 
    $consult = mysqli_fetch_all($result, MYSQLI_ASSOC);  

    return $consult;
  }

  function getBudget($id, $connect) {
    $where = null;
    if ($id) {
      $where = "WHERE id_projeto = '".$id."' ";
    }

    $sql = "SELECT 
            F.*,
            S.nome
          FROM 
            financeiro F 
          INNER JOIN 
            status S 
          ON 
            F.status_id = S.id
          ".$where."
          ORDER BY
            id desc
          ";

    $result = mysqli_query($connect, $sql); 
    $consult = mysqli_fetch_all($result, MYSQLI_ASSOC);  
    return $consult;
  }

  $resultProject = getProject($id, $connect);
  $resultArt = getArt($id, $connect);
  $resultBudget = getBudget($id, $connect);
  $allResultBudget = getBudget(null, $connect);
?>
<div class="container" style="margin-top:10px">
  <a class="btn btn-default" href="index.php" role="button">voltar</a>
	<div class="row" style="margin-top:10px">
		<div class="col-md-6">
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
							<th class="col-md-3">Trabalho</th>
							<th><?php echo utf8_encode($resultProject['descricao']) ?></th>
						</tr>
					</tbody>
				</table>
			</div>
      <?php 
        if ($resultProject['ativo'] == 1) {
          echo '<a class="btn btn-warning" style="float:right" href="edit.php?id='.$id.'&calcelP='.$resultProject['id'].'">CANCELAR PROJETO</a>';
        } else {
          echo '<a class="btn btn-warning" style="float:right" href="edit.php?id='.$id.'&activedP='.$resultProject['id'].'">ATIVAR PROJETO</a>';
        }
      ?>
		</div>
	</div><!-- row -->
	<hr>	

		<div class="row">
			<div class="col-md-12" style="margin-bottom:10px">
				<h3>Pendências de Arte</h3>
			</div>
			<div class="col-md-2">
        <?php  
          if ($resultArt) {
            echo '<b>Arquivo:</b> <a target="_blank" href="../../uploads/'.$resultArt[0]['arquivo'].'">'.$resultArt[0]['arquivo'].'</a>';
          } else {
            echo '<strong>Não existe arte!</strong>';
          }
        ?>
        
			</div>
      <?php if ($resultArt) : ?>
  			<div class="col-md-4">
          <?php 
            if(!is_null($resultArt[0]['aprovado'])) {
              if (intval($resultArt[0]['aprovado']) === 1) {
                echo '<p><strong>Arte aprovada!</strong></p>';
              } elseif(intval($resultArt[0]['aprovado']) === 0) {
                echo '<p><strong>Arte reprovada!</strong></p>';
              }
            }

            echo '<a class="btn btn-danger" id="reprArt" href="edit.php?id='.$id.'&calcelArt='.$resultArt[0]['id'].'">Reprovado</a>';
            echo '<a class="btn btn-primary" id="aprArt" href="edit.php?id='.$id.'&activedArt='.$resultArt[0]['id'].'">Aprovado</a>';
          ?>
  			</div>
      <?php endif; ?>
		</div><!-- row -->
		<hr>
		<div class="row">
			<div class="col-md-12" style="margin-bottom:10px">
				<h3>Pendências de Orçamento</h3>
			</div>
      <?php if ($resultBudget) : ?>
  			<div class="col-md-2">
  				<b>Tipo:</b> <?php echo utf8_encode($resultBudget[0]['nome']); ?>
  			</div>
  			<div class="col-md-2">
  				<b>Valor:</b> R$  <?php echo $resultBudget[0]['valor']; ?>
  			</div>

  			<div class="col-md-4">
          <?php 
            if(!is_null($resultBudget[0]['aprovado'])) {
              if (intval($resultBudget[0]['aprovado']) === 1) {
                echo '<p><strong>Orçamento aprovada!</strong></p>';
              } elseif(intval($resultBudget[0]['aprovado']) === 0) {
                echo '<p><strong>Orçamento reprovada!</strong></p>';
              }
            }

            echo '<a class="btn btn-danger" id="reprArt" href="edit.php?id='.$id.'&calcelOrc='.$resultBudget[0]['id'].'">Reprovado</a>';
            echo '<a class="btn btn-primary" id="aprArt" href="edit.php?id='.$id.'&activedOrc='.$resultBudget[0]['id'].'">Aprovado</a>';
          
          ?>
  			</div>
      <?php 
        else :
          echo "<strong>Não existe orçamento</strong>";
        endif;
      ?>
		</div><!-- row -->
		<hr>
		<div class="row">
		<div class="col-md-6">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th colspan="2" class="col-md-12 text-center danger">ARTES REPROVADAS</th>
						</tr>
						<tr>
							<th>Arquivo</th>
							<th>Data</th>
						</tr>
					</thead>
					<tbody>
          <?php 
              foreach($resultArt as $item) {
                if ($item['aprovado'] == 0 && !is_null($item['aprovado'])) {
                  echo '<tr>
                    <td>'.$item['arquivo'].'</td>
                    <td>'.$item['data'].'</td>
                  ';
                }
              }
            ?>
					</tbody>
				</table>
			</div>
		</div>
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
              foreach($allResultBudget as $item) {
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
	</div>
  <a class="btn btn-default" href="index.php" role="button">voltar</a>
</div>
<?php include '../inc/footer.php'; ?>
