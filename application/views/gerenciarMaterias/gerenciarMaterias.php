<?php $this->load->view('menu/header', $title);?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- CARDS -->
      <?php $this->load->view('gerenciarMaterias/parcial/cards_modal', $count) ?>
    </div>
    <div class="row">
      <!-- Listagem conteudos -->
      <?php $this->load->view('conteudos/conteudos_modal', $modulos) ?>
      <!-- Lista de presença -->
      <?php $this->load->view('listaPresenca/lista_presenca_modal') ?>
      <div class="modal fade" id="listaPresencaModal" tabindex="-1" role="">
        <?php $this->load->view('listaPresenca/add_ausencia_modal') ?>
      </div>
    </div>
    <div class="row">
      <!-- Atividades -->
      <?php $this->load->view('atividades/atividades_modal') ?>
      <div class="modal fade" id="atividadesModal" tabindex="-1" role="">
        <?php $this->load->view('atividades/add_atividades_modal', $modulos) ?>
      </div>
      <!-- Notas -->
      <?php $this->load->view('notas/notas_modal') ?>
      <div class="modal fade" id="notasModal" tabindex="-1" role="">
        <?php $this->load->view('notas/add_notas_modal') ?>
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
            "sSearch":       "",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Primeiro",
                "sPrevious": "Anterior",
                "sNext":     "Seguinte",
                "sLast":     "Último"
          }
        }
    });
    
    $('.dataTables_length').remove();
    $('.dataTables_filter').children().children().addClass('form-control').attr('placeholder', 'Buscar');;

});
</script>

<?php $this->load->view('menu/footer') ?>