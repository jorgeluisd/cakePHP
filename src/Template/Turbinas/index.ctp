<h1>Turbinas</h1>

<?= $this->Html->link(
    'Añadir turbina',
    ['controller' => 'Turbinas', 'action' => 'create'],
    ['class' => 'btn btn-info']
) ?>

<div style = 'padding-bottom: 20px;'></div>

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
                    ['controller' => 'Turbinas', 'action' => 'view', $turbina->id], ['style' => 'text-decoration:none;color:black']) ?>
                        
                </td>
                <td><?= $turbina->color ?></td>
                <td><?= $turbina->modelo ?></td>
                <td><?= $turbina->activo ?></td>
                <td>
                    <?= $this->Html->link('<i class="material-icons">mode_edit</i>',
                    ['controller' => 'Turbinas', 'action' => 'edit', $turbina->id],['escape' => false, 'style' => 'text-decoration:none;color:black', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Editar']) ?>

                    <?= $this->Html->link('<i class="material-icons">power_settings_new</i>',
                    ['controller' => 'Turbinas', 'action' => 'on', $turbina->id],['escape' => false, 'style' => 'text-decoration:none;color:black', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'On/Off']) ?>

                    <?= $this->Form->postLink(
                        '<i class="material-icons">delete</i>',
                        ['action' => 'delete', $turbina->id],
                        ['confirm' => '¿Estás seguro?', 'escape' => false, 'style' => 'text-decoration:none;color:black', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Borrar'])
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>