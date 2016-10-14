<?php include '../inc/header.php'; ?>
<div class="container" style="margin-top:10px">
	<div class="row">
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
							<th>001</th>
						</tr>
						<tr>
							<th class="col-md-3">Quantidade</th>
							<th>200</th>
						</tr>
						<tr>
							<th class="col-md-3">Cliente</th>
							<th>Marco Zero Veículos</th>
						</tr>
						<tr>
							<th class="col-md-3">Trabalho</th>
							<th>Cartões de visita</th>
						</tr>
						<tr>
							<th class="col-md-3">Status</th>
							<th>
								<select class="form-control">
									<option>Pré-Orçamento</option>
									<option>Orçamento</option>
								</select>
							</th>
						</tr>
						<tr>
							<th>
								Valor: 
							</th>
							<th>
								<input type="text" class="form-control" value="R$ 1590,00">
							</th>
						</tr>
						<tr>
							<th>
								Obs:
							</th>
							<th>
								<textarea class="form-control" rows="5" placeholder="Descreva para o cliente, todas as caracteristicas do orçamento."></textarea>
							</th>
						</tr>
					</tbody>
				</table>
			</div>
			<button class="btn btn-success" style="float:right; padding:10px 40px; margin-bottom:10px" onClick="location.href='../financeiro.html#completed'">Solicitar Aprovação</button>
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
						<tr>
							<th>Pre-Orçamento</th>
							<th>R$ 2000,00</th>
							<th>23/02/2016</th>
						</tr>
						<tr>
							<th>Pre-Orçamento</th>
							<th>R$ 1980,60</th>
							<th>25/02/2016</th>
						</tr>
						<tr>
							<th>Orçamento</th>
							<th>R$ 1750,00</th>
							<th>27/02/2016</th>
						</tr>
						<tr>
							<th>Orçamento</th>
							<th>R$ 1600,00</th>
							<th>28/02/2016</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- row -->
</div>
<?php include '../inc/footer.php'; ?>