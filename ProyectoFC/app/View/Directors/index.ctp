<!-- File: /app/View/Directors/index.ctp -->
<h1>Director</h1>
<table>
	<?php echo $this->Html->link('Agregar Director', array('controller' => 'directors', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($directors as $director): ?>
	<tr>
		<td><?php echo $director['Director']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($director['Director']['descripcion'], array('controller' => 'directors', 'action' => 'view', $director['Director']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $director['Director']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $director['Director']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($director); ?>
</table>