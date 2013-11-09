<!-- File: /app/View/Rubros/index.ctp -->
<h1>Rubros</h1>
<table>
	<?php echo $this->Html->link('Agregar Rubro', array('controller' => 'rubros', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Accion</th>

</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($rubros as $rubro): ?>
	<tr>
		<td><?php echo $rubro['Rubro']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($rubro['Rubro']['nombre'], array('controller' => 'rubros', 'action' => 'view', $rubro['Rubro']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $rubro['Rubro']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $rubro['Rubro']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($rubro); ?>
</table>
