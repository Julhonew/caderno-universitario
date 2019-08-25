<div class="col-lg-6 col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs pull-left" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab">
                  <i class="material-icons">assignment</i> Lista de Presença
                  <div class="ripple-container"></div>
                </a>
              </li>
            </ul>
            <ul class="nav nav-tabs pull-right" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link" href="#profile" data-toggle="tab">
                  <i class="material-icons">add_circle</i>Presente
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#listaPresencaModal">
                  <i class="material-icons">cancel</i>Ausente
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
            <table class="table table-hover" id="listaPresenca">
              <thead class="text-primary">
                <th>Motivo</th>
                <th>Status</th>
                <th>Data</th>
                <th id="acoes-listaPresenca">Ações</th>
              </thead>
              <tbody>
                <tr>
                  <td>Preguiça</td>
                  <td>Ausente</td>
                  <td>07/08/2019</td>
                  <td class="td-actions text-right">
                    <a href="materias/editar?>"><button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button></a>
                    <a href="materias/editar?>"><button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button></a>
                  </td>
                </tr>
                <tr>
                  <td>Sabia a materia</td>
                  <td>Ausente</td>
                  <td>07/08/2019</td>
                  <td class="td-actions text-right">
                    <a href="materias/editar?>"><button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button></a>
                    <a href="materias/editar?>"><button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>