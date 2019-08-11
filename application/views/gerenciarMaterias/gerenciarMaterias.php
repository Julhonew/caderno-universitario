<?php $this->load->view('menu/header', $title) ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <?php $this->load->view('gerenciarMaterias/parcial/cards_modal') ?>
    </div>
    <div class="row">
      <!-- Listagem conteudos -->
      <?php $this->load->view('conteudos/conteudos_modal', $conteudos) ?>
      <!-- Lista de presença -->
      <?php $this->load->view('gerenciarMaterias/parcial/lista_presenca_modal') ?>
      <div class="modal fade" id="listaPresencaModal" tabindex="-1" role="">
        <?php $this->load->view('gerenciarMaterias/parcial/add_ausencia_modal') ?>
      </div>
    </div>
    <div class="row">
      <!-- Atividades -->
      <?php $this->load->view('gerenciarMaterias/parcial/atividades_modal') ?>
      <div class="modal fade" id="atividadesModal" tabindex="-1" role="">
        <?php $this->load->view('gerenciarMaterias/parcial/add_atividades_modal') ?>
      </div>
      <!-- Notas -->
      <?php $this->load->view('gerenciarMaterias/parcial/notas_modal') ?>
      <div class="modal fade" id="notasModal" tabindex="-1" role="">
        <?php $this->load->view('gerenciarMaterias/parcial/add_notas_modal') ?>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
  $(document).ready(function() {
    $('#conteudos, #notas, #listaPresenca, #atividades').DataTable({
      "displayLength": "5",
      "language": {
            "sProcessing":   "A processar...",
            "sLengthMenu":   "Mostrar _MENU_ registos",
            "sZeroRecords":  "Não foram encontrados resultados",
            "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
            "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
            "sInfoPostFix":  "",
            "sSearch":       "Procurar:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Primeiro",
                "sPrevious": "Anterior",
                "sNext":     "Seguinte",
                "sLast":     "Último"
          }
        }
    });
} );
</script>

<?php $this->load->view('menu/footer') ?>