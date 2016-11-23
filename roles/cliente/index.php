<?php 
  include '../inc/header.php'; 
  include '../../config/config.php';

  $sql = "SELECT 
            P.*,
            S.nome,
            F.id_projeto,
            F.valor
          FROM 
            projeto P 
          INNER JOIN
            financeiro F
          ON
            F.id_projeto = P.id
          INNER JOIN 
            status S 
          ON 
            F.status_id = S.id
          ORDER BY
            F.id desc
          ";

  $result = mysqli_query($connect,$sql); 
?>
<div class="container" style="margin-top:10px">
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr class='info'>
							<th>O.S</th>
							<th>QTA</th>
							<th>Trabalho</th>
							<th>Status</th>
							<th>Informações</th>
						</tr>
					</thead>
					<tbody>
            <?php
                while($consulta = mysqli_fetch_array($result)) {
                  $classAtivo = '';
                  if ($consulta['ativo'] != 1) {
                    $classAtivo = 'danger alert-danger';
                  }

                  echo '<tr class="'.$classAtivo.'">
                      <td>' .  $consulta['cod_projeto'] . '</td>
                      <td>' .  $consulta['quantidade'] . '</td>
                      <td>' .  utf8_encode($consulta['descricao']) . '</td>
                      <td>' .  utf8_encode($consulta['nome']) . '</td>
                      <td><a href="edit.php?id='.$consulta['id'].'">Editar</a></td>
                  </tr>';
                } 
            ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include '../inc/footer.php'; ?>
