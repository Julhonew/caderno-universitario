<?php 
		// echo "<pre>";
		// var_dump($id);
		// exit;
$this->load->view('menu/header', $title) ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Editar conteudo</h4>
						<p class="card-category">Cadastrou algo errado, ou esqueceu de alguma coisa?</p>
					</div>
					<div class="card-body">
						<form action="conteudos/editar" method="POST">
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<input type="hidden" name="mat_id" value="<?php echo $mat_id ?>">
							<div class="row">
			                  	<div class="col-md-4">
			                    	<div class="form-group">
			                     		<div class="">
									      <input type="text" name="nome" class="form-control" value="<?php echo $conteudo->nome ?>" placeholder="Nome"  required>
									    </div>
			                    	</div>
			                  	</div>

			                  	<div class="col-md-2 col-lg-4">
			                    	<div class="form-group">
			                    		<label class="mr-2">Revisar:</label>
			                     		<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input <?php echo $conteudo->status == 0 ? 'checked' : '' ?> class="form-check-input" type="radio" name="revisar" id="revisar" value="0"> Sim
										    <span class="circle">
										        <span class="check"></span>
										    </span>
										  </label>
										</div>
										<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input <?php echo $conteudo->status == 1 ? 'checked' : '' ?> class="form-check-input" type="radio" name="revisar" id="revisar" value="1"> Não
										    <span class="circle">
										        <span class="check"></span>
										    </span>
										  </label>
										</div>
			                    	</div>
			                  	</div>

			                </div>

			                <div class="row">
			                  	<div class="col-md-4">
			                    	<div class="form-group">
			                     		<label class="text">Data</label>
			                      		<input value="<?php echo date('Y-m-d', $conteudo->data) ?>"name="data" type="date" class="form-control" required>
			                    	</div>
			                  	</div>

			                  	<div class="col-md-2 col-lg-6">
			                    	<div class="form-group">
			                    		<label class="mr-2">Dificuldade:</label>
			                     		<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input <?php echo $conteudo->dificuldade == 1 ? 'checked' : '' ?>  class="form-check-input" type="radio" name="dificuldade" id="dificuldade" value="1"> Facil
										    <span class="circle">
										        <span class="check"></span>
										    </span>
										  </label>
										</div>
										<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input <?php echo $conteudo->dificuldade == 2 ? 'checked' : '' ?> class="form-check-input" type="radio" name="dificuldade" id="dificuldade" value="2"> Mais ou menos
										    <span class="circle">
										        <span class="check"></span>
										    </span>
										  </label>
										</div>
										<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input <?php echo $conteudo->dificuldade == 3 ? 'checked' : '' ?> class="form-check-input" type="radio" name="dificuldade" id="dificuldade" value="3"> Dificil
										    <span class="circle">
										        <span class="check"></span>
										    </span>
										  </label>
										</div>
			                    	</div>
			                  	</div>

			                </div>

			                <div class="row">
			                	<div class="col-md-12">
							        <textarea name="conteudo" id="editor" placeholder="Digite aqui o conteudo">
							        	<?php echo $conteudo->conteudo ?>
							        </textarea>
							    </div>
			                </div>

		                 	<button type="submit" class="btn btn-primary mt-3 form-control">Salvar</button>
			                <div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('menu/footer') ?>