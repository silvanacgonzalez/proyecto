<!-- File: /app/View/SubClasificacions/index.ctp -->
<h1>SubClasificacions</h1>
<table>
	<?php echo $this->Html->link('Agregar SubClasificacion', array('controller' => 'subclasificacions', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Clasificacion</th>
        <th>Acciones</th>
</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($subclasificacions as $subclasificacion): ?>
	<tr>
		<td><?php echo $subclasificacion['Rubro']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($SubClasificacio['SubClasificacion']['nombre'], array('controller' => 'subclasificacions', 'action' => 'view', $subclasificacion['SubClasificacion']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $subclasificacion['SubClasificacion']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $subclasificacion['SubClasificacion']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($subclasificacion); ?>
</table>
