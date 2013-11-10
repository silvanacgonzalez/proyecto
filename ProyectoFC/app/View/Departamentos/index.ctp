<!-- File: /app/View/Departamentos/index.ctp -->
<h1>Departamento</h1>
<table>
	<?php echo $this->Html->link('Agregar Departamento', array('controller' => 'departamentos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($departamentos as $departamento): ?>
	<tr>
		<td><?php echo $departamento['Departamento']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($departamento['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $departamento['Departamento']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $departamento['Departamento']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $departamento['Departamento']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($departamento); ?>
</table>