<?php $this->load->view('menu/header', $title) ?> 
<div class="content">
    <div class="container-fluid">
      	<div class="row">
        	<div class="col-md-12">
        		<?php 
	        		if(isset($erros)){ 
	    				foreach ($erros as $erro) {
	    					$this->load->view('parcial/erro', ['erro' => $erro]);
	    				}
	    			}
        		?>
          		<div class="card">
            		<div class="card-header card-header-primary">
	              		<h4 class="card-title">Editar Materia</h4>
	              		<p class="card-category">Todos os campos são obrigatorios</p>
	            	</div>
		            <div class="card-body">
		                <form action="editar" method="POST">
		                	<input type="hidden" name="id" value="<?php echo $materia->id ?>">
			                <div class="row">
			                  	<div class="col-md-12">
			                    	<div class="form-group">
			                     		<label class="bmd-label-floating">Nome</label>
			                      		<input name="nome"  type="text" class="form-control" value="<?php echo $materia->nome ?>">
			                    	</div>
			                  	</div>
			                </div>
			                <div class="row">
			                  	<div class="col-md-12">
			                    	<div class="form-group">
			                     		<label class="bmd-label-floating">Professor</label>
			                      		<input name="prof" type="text" class="form-control" value="<?php echo $materia->prof ?>">
			                    	</div>
			                  	</div>
			                </div>
			                <div class="row">
			                  	<div class="col-md-2">
			                    	<div class="form-group">
			                    		<div class="form-group">
			                     		<label>Semestre</label>
			                      		<select name="semestre" class="form-control">
			                      		<?php for($i = 1; $i <= 12; $i++){
			                      				if($i == $materia->semestre){?>
			                      					<option selected> <?php echo $i?> º semestre</option>	
			                      			<?php }else{ ?>
			                      					<option> <?php echo $i?> º semestre</option>
			                      		<?php } }?>
			                      		</select>
			                    	</div>
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