<div id="modal_atividades" class="modal-dialog modal-login" role="document">
  <div class="modal-content">
    <div class="card card-signup card-plain">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Atividades</h4>
        <p class="card-category">Quando estiver proxima da entrega avisaremos
        </p>
      </div>
      <div class="modal-body">
        <form class="form" id="form_atividades"method="POST" action="<?php echo base_url('atividades/adicionar/'.$materia_id)?>">
          <p class="description text-center">Nota é opcional</p>
          <div class="card-body">

            <div class="form-group bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="material-icons">ballot</i></div>
                </div>
                <input type="text" class="form-control" name="nome" placeholder="Atividade">
              </div>
            </div>

            <div class="form-group bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="material-icons">calendar_today</i></div>
                </div>
                <input type="text" class="form-control" name="data" placeholder="Data de entrega" >
              </div>
            </div>

            <div class="form-group bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="material-icons">offline_pin</i></div>
                </div>
                <input type="text" placeholder="Nota" name="nota" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <input id="submit" type="submit" class="btn btn-primary btn-link btn-wd btn-lg" value="Salvar">
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">

  $(document).ready(function(){
    jQuery.validator.addMethod("dateBR", function(value, element){
      var data = value.split('/');
      const calendario = ['31','29','31','30','31','30','31','31','30','31','30','31'];
      
      if(data[2] < 1900)
        return false;
      if(data[0] <= calendario[data[1] - 1])
        return true;
      else
        return false;

    }, "Insira uma data valida!");

    $( ".date" ).datepicker({
      dateFormat: "dd-mm-yyyy"
    });
  
    $('[name=data]').mask("00/00/0000");
    $('[name=nota]').mask("00.00", {reverse: true});

    $('#form_atividades').validate({
      rules:{
        nome:{
          required: true
        },
        data:{
          dateBR: true,
          required: true,
          maxlength: 10,
          minlength: 10
        },
        nota:{
          range: [0, 10]
        }
      }
    });
  });
</script>