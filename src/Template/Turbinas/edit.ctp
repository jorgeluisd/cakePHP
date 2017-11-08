    <div class="row justify-content-md-center">
    	<div class="col-md-6">

    		<h1>Añadir Turbina</h1>
    		<?php
    			echo $this->Form->create($turbina);
			?>

		    <div class="form-group">
		    	<?php
		    		echo $this->Form->input('nombre',['required' => true, 'class' => 'form-control']);
		    	?>
		    </div>
		    <div class="form-group"><div class="form-group">
				<?php
		    		echo $this->Form->input('color',['required' => true, 'class' => 'form-control']);
		    	?>

		    </div>

		    <div class="form-group"><div class="form-group">
		    	<?php
		    		echo $this->Form->input('modelo',['required' => true, 'class' => 'form-control']);
		    	?>

		    </div>
		    
		    <div class="switch"> 
				<label>
					Off
					<?php
					 	echo $this->Form->checkbox('activo', [
					 		'div' => false,
					 		
					 		
					 		'required' => false, 
					 		'label' => false, 

					 	]); 
					 ?>
					<span class="lever"></span>
					On
				</label>
			</div>
    	</div>

    </div>
<?php
    
    echo $this->Form->button(__('Guardar turbina'),['class' => 'btn btn-info']);
    echo $this->Form->end();
?>

