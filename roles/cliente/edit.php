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
							<th class="col-md-3">Trabalho</th>
							<th>Cartões de visita</th>
						</tr>
					</tbody>
				</table>
			</div>
			<button class="btn btn-warning" style="float:right" onClick="location.href='../cliente.html'">CANCELAR PROJETO</button>
		</div>
	</div><!-- row -->
	<hr>	
		<div class="row">
			<div class="col-md-12" style="margin-bottom:10px">
				<h3>Pendências de Arte</h3>
			</div>
			<div class="col-md-2">
				<b>Arquivo:</b> <a href="">0010.pdf</a>
			</div>
			<div class="col-md-4">
				<a class="btn btn-primary" id="aprArt" href="../cliente.html#completed">Aprovado</a>
				<a class="btn btn-danger" id="reprArt" href="#">Reprovado</a>
			</div>
		</div><!-- row -->
		<div class="row" style="margin-top:20px">
			<div class="col-md-12" id="feedbackArt" style="display:none">
				<textarea class="form-control" rows="7" placeholder="Diga para nós, o que não gostou no trabalho."></textarea>
				<button class="btn btn-success" style="float:right; padding:10px 40px; margin-top:10px" id="enviarArt">Enviar</button>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12" style="margin-bottom:10px">
				<h3>Pendências de Orçamento</h3>
			</div>
			<div class="col-md-2">
				<b>Tipo:</b> Pré-Orçamento
			</div>
			<div class="col-md-2">
				<b>Valor:</b> R$ 1590,00
			</div>

			<div class="col-md-4">
				<a class="btn btn-primary" id="aprOrc" href="../cliente.html#completed">Aprovado</a>
				<a class="btn btn-danger" id="reprOrc" href="#">Reprovado</a>
			</div>
		</div><!-- row -->
		<div class="row" style="margin-top:20px">
			<div class="col-md-12" id="feedbackOrc" style="display:none">
				<textarea class="form-control" rows="7" placeholder="Informe porque recusou o preço."></textarea>
				<button class="btn btn-success" style="float:right; padding:10px 40px; margin-top:10px" id="enviarOrc">Enviar</button>
			</div>
		</div>
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
						<tr>
							<th class="col-md-6"><a href="">001.pdf</a></th>
							<th>10/02/2016</th>
						</tr>
						<tr>
							<th class="col-md-6"><a href="">002.pdf</a></th>
							<th>12/02/2016</th>
						</tr>
						<tr>
							<th class="col-md-6"><a href="">004.pdf</a></th>
							<th>18/02/2016</th>
						</tr>
						<tr>
							<th class="col-md-6"><a href="">009.pdf</a></th>
							<th>21/02/2016</th>
						</tr>
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
	</div>
</div>
<?php include '../inc/footer.php'; ?>