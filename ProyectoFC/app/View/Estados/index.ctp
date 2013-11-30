<!-- File: /app/View/Estados/index.ctp -->
<h1>Estado</h1>
<table>
	<?php echo $this->Html->link('Agregar Estado', array('controller' => 'estados', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $estados array, printing out post info -->
	<?php foreach ($estados as $estado): ?>
	<tr>
		<td><?php echo $estado['Estado']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($estado['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $estado['Estado']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Borrar',  array('action' => 'delete', $estado['Estado']['id']),  array('confirm' => 'Desea borrar?'));?>

		<?php echo $this->Html->link('Editar', array('action' => 'edit', $estado['Estado']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($estado); ?>
</table>