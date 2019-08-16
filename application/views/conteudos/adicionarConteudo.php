<?php $this->load->view('menu/header', $title) ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Adicione um conteudo</h4>
						<p class="card-category">Você poderá ler os conteudos cadastrados quando quiser</p>
					</div>
					<div class="card-body">
						<form action="conteudos/adicionar" method="POST">
							<input type="hidden" name="mat_id" value="<?php echo $mat_id ?>">
							<div class="row">
			                  	<div class="col-md-4">
			                    	<div class="form-group">
			                     		<div class="">
									      <input type="text" name="nome" class="form-control" placeholder="Nome" required>
									    </div>
			                    	</div>
			                  	</div>

			                  	<div class="col-md-2 col-lg-4">
			                    	<div class="form-group">
			                    		<label class="mr-2">Revisar:</label>
			                     		<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input class="form-check-input" type="radio" name="revisar" id="revisar" value="1"> Sim
										    <span class="circle">
										        <span class="check"></span>
										    </span>
										  </label>
										</div>
										<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input checked class="form-check-input" type="radio" name="revisar" id="revisar" value="0"> Não
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
			                      		<input name="data"  type="date" class="form-control" required>
			                    	</div>
			                  	</div>  	

			                  	<div class="col-md-2 col-lg-6">
			                    	<div class="form-group">
			                    		<label class="mr-2">Dificuldade:</label>
			                     		<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input class="form-check-input" type="radio" name="dificuldade" id="dificuldade" value="1"> Facil
										    <span class="circle">
										        <span class="check"></span>
										    </span>
										  </label>
										</div>
										<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input checked class="form-check-input" type="radio" name="dificuldade" id="dificuldade" value="2"> Mais ou menos
										    <span class="circle">
										        <span class="check"></span>
										    </span>
										  </label>
										</div>
										<div class="form-check form-check-radio form-check-inline">
										  <label class="form-check-label">
										    <input  class="form-check-input" type="radio" name="dificuldade" id="dificuldade" value="3"> Dificil
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
							        <textarea rows="100" name="conteudo" id="editor"></textarea>
							    </div>
			                </div>

		                 	<button id="enviar" type="button" class="btn btn-primary mt-3 form-control">Cadastrar</button>
			                <div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#enviar').click(function submitAjax(){
		$.ajax({
			method: "POST",
			url: "http://localhost/ci/caderno-universitario/conteudos/adicionar/23",
			data: { mat_id: $('[name=mat_id]').val(),
					nome: $('[name=nome]').val(),
				    data: $('[name=data]').val(), 
					revisar: $('#revisar').val(), 
					dificuldade: $('[name=dificuldade]').val(), 
					conteudo: $('[name=conteudo]').val() 
				}
		})
		.done(function( response ) {
			if(response){
				$(location).attr('href', 'http://localhost/ci/caderno-universitario/gerenciarMaterias/dashboard/'+$('[name=mat_id]').val());
			}
		});
	});
</script>

<?php $this->load->view('menu/footer') ?>