<!-- File: /app/View/Frecuencias/index.ctp -->
<h1>Frecuencia</h1>
<table>
	<?php echo $this->Html->link('Agregar Frecuencia', array('controller' => 'frecuencias', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $frecuencias array, printing out post info -->
	<?php foreach ($frecuencias as $frecuencia): ?>
	<tr>
		<td><?php echo $frecuencia['Frecuencia']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($frecuencia['Frecuencia']['nombre'], array('controller' => 'frecuencias', 'action' => 'view', $frecuencia['Frecuencia']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $frecuencia['Frecuencia']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $frecuencia['Frecuencia']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($frecuencia); ?>
</table>