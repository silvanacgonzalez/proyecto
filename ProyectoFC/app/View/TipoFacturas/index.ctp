<!-- File: /app/View/TipoFacturas/index.ctp -->
<h1>TipoFacturas</h1>
<table>
	<?php echo $this->Html->link('Agregar TipoFactura', array('controller' => 'tipofacturas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Accion</th>

</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($tipofacturas as $tipofactura): ?>
	<tr>
		<td><?php echo $tipofactura['TipoFactura']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($tipofactura['TipoFactura']['nombre'], array('controller' => 'tipofacturas', 'action' => 'view', $tipofactura['TipoFactura']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $tipofactura['TipoFactura']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $tipofactura['TipoFactura']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($tipofactura); ?>
</table>
