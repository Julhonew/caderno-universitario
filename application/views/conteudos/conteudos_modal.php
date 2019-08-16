<?php?>
<div class="col-lg-6 col-md-12">
  <div class="card">
    <div class="card-header card-header-tabs card-header-primary">
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <ul class="nav nav-tabs pull-left" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab">
                <i class="material-icons">playlist_add_check</i> Conteudo
                <div class="ripple-container"></div>
              </a>
            </li>
          </ul>
          <ul class="nav nav-tabs pull-right" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('conteudos/adicionar/').$materia_id?>">
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
          <table class="table table-hover" id="conteudos">
            <thead class="text-primary">
              <th>Nome</th>
              <th>Dificuldade</th>
              <th>Status</th>
              <th>Data</th>
              <th>Ações</th>
            </thead>
            <tbody>
              <?php foreach ($conteudos as $conteudo) { ?>
                <tr>
                  <td><?php echo $conteudo->nome ?></td>
                  <td><?php echo $conteudo->dificuldade ?></td>
                  <td><?php echo $conteudo->revisar ?></td>
                  <td><?php echo date('d/m/Y', $conteudo->data) ?></td>
                  <td class="td-actions text-right">
                    <a href="<?php echo base_url('conteudos/editar/').$conteudo->id ?>"><button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button></a>
                    <a href="<?php echo base_url('conteudos/excluir/').$conteudo->id ?>"><button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-link btn-sm">
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