<!-- File: /app/View/Personas/index.ctp -->
<h1>Personas</h1>
<table>
	<?php echo $this->Html->link('Agregar Persona', array('controller' => 'personas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($persona as $persona): ?>
	<tr>
		<td><?php echo $persona['Persona']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['dni'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['nombre'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['apellido'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
	
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $persona['Persona']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $persona['Persona']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($persona); ?>
</table>