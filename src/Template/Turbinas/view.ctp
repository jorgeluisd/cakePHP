<div class="row justify-content-md-center">
	<div class="col-md-6">

		<h1 class="text-capitalize"><?= h($turbina->nombre) ?></h1>
		<hr>

		<h3>Color:</h3>
			<p><?= h($turbina->color) ?></p>
		<h3>Modelo:</h3>
			<p><?= h($turbina->modelo) ?></p>
		<h3>Activo:</h3>
			<p><?= h($turbina->activo) ?></p>    

		<?= $this->Html->link(
		    'Regresar',
		    ['controller' => 'Turbinas', 'action' => 'index'],
		    ['class' => 'btn btn-info']
		) ?>
	</div>

</div>


