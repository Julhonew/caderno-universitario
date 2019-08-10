<?php $this->load->view('menu/header', $title) ?>

<div class="content">
    <div class="container-fluid">
      	<div class="row">
        	<div class="col-md-12">
          		<div class="card">
            		<div class="card-header card-header-primary">
	              		<h4 class="card-title">Edit Profile</h4>
	              		<p class="card-category">Complete your profile</p>
	            	</div>
		            <div class="card-body">
		                <form action="adicionar" method="POST">
			                <div class="row">
			                  	<div class="col-md-12">
			                    	<div class="form-group">
			                     		<label class="bmd-label-floating">Nome</label>
			                      		<input name="nome"  type="text" class="form-control" required>
			                    	</div>
			                  	</div>
			                </div>
			                <div class="row">
			                  	<div class="col-md-12">
			                    	<div class="form-group">
			                     		<label class="bmd-label-floating">Professor</label>
			                      		<input name="prof" type="text" class="form-control" required>
			                    	</div>
			                  	</div>
			                </div>
			                <div class="row">
			                  	<div class="col-md-12">
			                    	<div class="form-group">
			                     		<label>Semestre</label>
			                      		<select name="semestre" class="form-control col-md-2" required>
			                      			<option>Escolha seu semestre</option>
			                      		<?php for($i = 1; $i <= 12; $i++){?>
			                      			<option> <?php echo $i?> º semestre</option>
			                      		<?php } ?>
			                      		</select>
			                    	</div>
			                  	</div>
			                </div>
			                <button type="submit" class="btn btn-primary">Cadastrar</button>
			                <div class="clearfix"></div>
		                </form>
           		 	</div>
          		</div>
        	</div>
      	</div>
    </div>
</div>
<?php $this->load->view('menu/footer') ?>