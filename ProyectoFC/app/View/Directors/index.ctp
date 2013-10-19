<!-- File: /app/View/Directors/index.ctp -->
<h1>Blog directors</h1>
<table>
	<?php echo $this->Html->link('Agregar Director', array('controller' => 'directors', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Descripcion</th>
		<th>Creado</th>
		<th>Modificado</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($directors as $director): ?>
	<tr>
		<td><?php echo $director['Director']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($director['Director']['descripcion'], array('controller' => 'directors', 'action' => 'view', $director['Director']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->directorLink('Delete',
                array('action' => 'delete', $director['Director']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $director['Director']['id'])); ?>
		</td>
		<td><?php echo $director['Director']['created']; ?></td>
		<td><?php echo $director['Director']['modified']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($director); ?>
</table>