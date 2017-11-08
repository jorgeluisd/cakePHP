<h1>Turbinas</h1>

<?= $this->Html->link(
    'Añadir turbina',
    ['controller' => 'Turbinas', 'action' => 'create'],
    ['class' => 'btn btn-info']
) ?>
<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" id="turbinaTable">
    <thead>
        <th>Nombre</th>
        <th>Color</th>
        <th>Modelo</th>
        <th>Activo</th>
        <th>Acciones</th>        
    </thead>

    <tbody>
        
        <?php foreach ($turbinas as $turbina): ?>
            <tr>
                <td>
                    <?= $this->Html->link($turbina->nombre,
                    ['controller' => 'Turbinas', 'action' => 'view', $turbina->id]) ?>
                        
                </td>
                <td><?= $turbina->color ?></td>
                <td><?= $turbina->modelo ?></td>
                <td><?= $turbina->activo ?></td>
                <td>
                    <?= $this->Html->link('Editar',
                    ['controller' => 'Turbinas', 'action' => 'edit', $turbina->id]) ?>

                    <?= $this->Html->link('On/Off',
                    ['controller' => 'Turbinas', 'action' => 'on', $turbina->id]) ?>

                    <?= $this->Form->postLink(
                        'Eliminar',
                        ['action' => 'delete', $turbina->id],
                        ['confirm' => '¿Estás seguro?'])
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>