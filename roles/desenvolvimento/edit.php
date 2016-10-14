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
              <th class="col-md-3">Briefing</th>
              <th>
                <textarea class="form-control" rows="6">Cartao de visita, papel coucher, dimensões 9x5, papel tipo fosco...</textarea>
              </th>
            </tr>
            <tr>
              <th colspan="2" class="alert-info text-center">INFORMAÇÕES DE MARKETING</th>
            </tr>
            <tr>
              <th>Cores:</th>
              <th>Azul, Verde, Preto</th>
            </tr>
            <tr>
              <th>Imagens:</th>
              <th>Carro, Pista, Cifrão e Pneus</th>
            </tr>
            <tr>
              <th colspan="2" class="alert-info text-center">ARQUIVO PARA APROVAÇÃO</th>
            </tr>
            <tr>
              <th>Arquivo</th>
              <th><input type="file" class="form-control"></th>
            </tr>
          </tbody>
        </table>
      </div>
      <a class="btn btn-success" style="float:right;margin-bottom:10px" href="../marketing.html#completed">
        Solicitar Aprovação
      </a>
    </div>

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
  </div>
</div>
<?php include '../inc/footer.php'; ?>