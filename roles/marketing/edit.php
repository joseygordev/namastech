<?php include '../inc/header.php'; ?>
<div class="container" style="margin-top:10px">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th colspan="2" class="col-md-12 col-xs-12 text-center info">INFORMAÇÕES DO PROJETO</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="col-md-3">O.S</th>
              <th>001</th>
            </tr>
            <tr>
              <th class="col-md-3">Cliente</th>
              <th>Marco Zero Veiculos</th>
            </tr>
            <tr>
              <th class="col-md-3">Quantidade</th>
              <th>200</th>
            </tr>
            <tr>
              <th class="col-md-3">Trabalho</th>
              <th>Cartões de visita</th>
            </tr>
            <tr>
              <th>Pré-Orçamento?</th>  
              <th><input type="checkbox" id="trbOrcamento" style="outline:none"> Não</th>
            </tr>
            <tr id="novoTrab">
            	<th>Novo trabalho?</th>
            	<th><input type="checkbox" id="trbantigo" style="outline:none;"> Não</th>
            </tr>
            <tr  style="display:none" id="showTrb">
            	<th>Trabalho realizados</th>	
            	<th>
            		<select id="optTrb">
            			<option value='0'>Selecione uma opção</option> 
            			<option value='1'>Cartão de visita Miniatura</option>
            		</select>
            	</th>
            </tr>
            <tr>
              <th class="col-md-3 col-xs-3">Briefing</th>
              <th>
                  <textarea class="form-control" rows="6" id="textarea"></textarea>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6 col-xs-6">
        <button id="add" class="btn btn-block btn-success">Adicionar Campo</button>
      </div>
      <div class="col-md-6 col-xs-6">
        <button class="btn btn-block btn-success" onClick="location.href='../marketing.html#completed'" id="btnAcao">Orçar</button>
      </div>
    </div>
  </div><!-- row -->
</div>
<?php include '../inc/footer.php'; ?>