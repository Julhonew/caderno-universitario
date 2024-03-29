<?php
$notification = $this->session->userdata('notification');
$this->session->unset_userdata('notification');
if($notification && $notification['tipo'] == 'success'){ ?> 

<div id="notificacao" data-notify="container" class="col-11 col-md-4 alert alert-success alert-with-icon animated fadeInDown" role="alert" data-notify-position="top-center" style="display: inline-block; margin: 15px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; left: 0px; right: 0px;">
<button id="fechar" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 50%; margin-top: -9px; z-index: 1033;">
<i class="material-icons">close</i>
</button>
<i data-notify="icon" class="material-icons">add_alert</i>
<span data-notify="title"></span> 
<span data-notify="message"><?php echo $notification['msg'] ?></span>
<a href="#" target="_blank" data-notify="url"></a>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#fechar').click(function(){
          $('#notificacao').addClass('fadeOutUp');
        setTimeout(function(){
          $('#notificacao').remove();
        }, 1000);
      });
    setTimeout(function(){
      $('#notificacao').addClass('fadeOutUp');
      setTimeout(function(){
        $('#notificacao').remove();
      }, 1000);
    }, 5000);
  });
</script>

<?php } ?>