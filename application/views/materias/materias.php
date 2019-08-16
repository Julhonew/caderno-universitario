<?php $this->load->view('menu/header', $title) ?>
<div class="content">
    <div class="col-md-12">
    	<?php if(isset($success)){
    		$this->load->view('success', ['modify' => true]);
    	}?>
	    <div class="card card-plain">
	        <div class="card-header card-header-primary">
	            <a href="materias/adicionar" type="submit" class="btn btn-primary pull-right">+ Materias</a>
	            <h4 class="card-title mt-0"> Gerencie suas materias</h4>
	            <p class="card-category"> Clique para começar seus estudos</p>
	        </div>
	        <div class="card-body">
	        	<div class="table-responsive">
	    	        <table class="table table-hover">
	              		<thead class="">
	                		<th class="td-center">
	                  			Semestre
	                		</th>
	                		<th class="td-center">
	                  			Nome
	                		</th>
	                		<th class="td-center">
	                  			Professor
	                		</th>
	                		<th class="td-center">
	                  			Media
	                		</th>
	                		<th class="td-center">
	                  			Faltas
	                		</th>
	                		<th class="td-center">
	                  			Ações
	                		</th>
	              		</thead>
	              		<tbody>
	              			<?php foreach ($materias as $materia) { ?>
	                    	<tr onclick="location.href = '<?php echo base_url('GerenciarMaterias/dashboard/').$materia->id ?>'" style="cursor: pointer;">
	                          	<td class="td-center">
	                            	<?php echo $materia->semestre?>º
	                          	</td>
	                          	<td class="td-center">
	                            	<?php echo $materia->nome ?>
	                          	</td>
	                          	<td class="td-center">
	                           		<?php echo $materia->prof ?>
	                         	</td>
	                         	<td class="td-center">
	                           		-
	                         	</td>
	                         	<td class="td-center">
	                           		0
	                         	</td>
	                          	<td class="td-actions td-center">
                              		<a href="materias/editar/<?php echo $materia->id ?>"><button type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                                		<i class="material-icons">edit</i>
                              		</button></a>
                              		<a href="materias/excluir/<?php echo $materia->id ?>"><button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-link btn-sm">
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
<?php $this->load->view('menu/footer') ?>