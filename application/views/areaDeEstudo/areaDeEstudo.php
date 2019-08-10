<?php $this->load->view('menu/header', $title) ?>
<!-- Comentario 
Não esquecer de na hora de tratar os links de videos a serem adicionados
fazer um tratamente com str_replace para substituir 'watch?v=' por 'embed/' --> 
<div class="content">
    <div class="col-md-13">
    	<div class="col-md-8 offset-2">
	    	<div class="embed-responsive embed-responsive-16by9">
	  			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tBRqx3HQG0o" allowfullscreen></iframe>
			</div>
			<input type="text" name="tee">
		</div>
		<div class="col-md-8">
	        <textarea rows="40" name="editor" id="editor"></textarea>
	    </div>
 
		
<?php $this->load->view('menu/footer') ?>