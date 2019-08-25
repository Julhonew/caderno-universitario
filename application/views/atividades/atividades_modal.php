<div class="col-lg-6 col-md-12">
  <div class="card">
    <div class="card-header card-header-tabs card-header-primary">
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <ul class="nav nav-tabs pull-left" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab">
                <i class="material-icons">ballot</i> Atividades
                <div class="ripple-container"></div>
              </a>
            </li>
          </ul>
          <ul class="nav nav-tabs pull-right" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#atividadesModal">
                <i class="material-icons">add_circle</i>
                <div class="ripple-container"></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane active" id="profile">
          <table class="table table-hover" id="atividades">
            <thead class="text-primary">
              <th>Nome</th>
              <th>Status</th>
              <th>Nota</th>
              <th>Data</th>
              <th id="acoes-atividades">Ações</th>
            </thead>
            <tbody>
              <?php foreach($atividades as $atividade){ ?>
                <tr>
                  <td><?php echo $atividade->nome?></td>
                  <td><?php echo $atividade->status ?></td>
                  <td><?php echo $atividade->nota ?></td>
                  <td><?php echo date('d/m/Y', $atividade->data) ?></td>
                  <td class="td-actions text-right">
                    <a href="materias/editar/<?php echo $atividade->id ?>?>"><button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button></a>
                    <a href="materias/editar/<?php echo $atividade->id ?>?>"><button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>