<!-- File: /app/View/EstadoNotificacions/index.ctp -->
<h1>Estado de Notificacions</h1>
<table>
	<?php echo $this->Html->link('Agregar Estado', array('controller' => 'estadonotificacions', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($estadonotificacions as $estadonotificacion): ?>
	<tr>
		<td><?php echo $estadonotificacion['EstadoNotificacion']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($estadonotificacion['EstadoNotificacion']['nombre'], array('controller' => 'estadonotificacions', 'action' => 'view', $estadonotificacion['EstadoNotificacion']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $estadonotificacion['EstadoNotificacion']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $estadonotificacion['EstadoNotificacion']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($estadonotificacion); ?>
</table>