<!-- File: /app/View/Rols/index.ctp -->
<h1>Rols</h1>
<table>
	<?php echo $this->Html->link('Agregar Rol', array('controller' => 'rols', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Descripcion</th>
		<th>Accion</th>
</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($rols as $rol): ?>
	<tr>
		<td><?php echo $rol['Rol']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($rol['Rol']['descripcion'], array('controller' => 'rols', 'action' => 'view', $rol['Rol']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $rol['Rol']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $rol['Rol']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($rol); ?>
</table>
