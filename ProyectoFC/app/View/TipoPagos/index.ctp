<!-- File: /app/View/TipoPagos/index.ctp -->
<h1>TipoPagos</h1>
<table>
	<?php echo $this->Html->link('Agregar TipoPago', array('controller' => 'tipopagos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Accion</th>

</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($tipopagos as $tipopago): ?>
	<tr>
		<td><?php echo $tipopago['TipoPago']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($tipopago['TipoPago']['descripcion'], array('controller' => 'tipopagos', 'action' => 'view', $tipopago['TipoPago']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $tipopago['TipoPago']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $tipopago['TipoPago']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($tipopago); ?>
</table>
