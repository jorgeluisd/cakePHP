<h1>Editar Turbinas</h1>
<?php
    echo $this->Form->create($turbina);
    echo $this->Form->create($turbina);
    echo $this->Form->input('nombre',['required' => true]);
    echo $this->Form->input('color',['required' => true]);
    echo $this->Form->input('modelo',['required' => true]);
    echo $this->Form->control('activo', ['type' => 'checkbox']);
    echo $this->Form->button(__('Guardar artículo'));
    echo $this->Form->end();
?>