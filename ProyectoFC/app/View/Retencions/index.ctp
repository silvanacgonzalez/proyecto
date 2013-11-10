<!-- File: /app/View/Retencions/index.ctp -->
<h1>Retencions</h1>
<table>
	<?php echo $this->Html->link('Agregar Retencion', array('controller' => 'retencions', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Canon Inst</th>
		<th>Monto</th>
		<th>Fondo Reserva</th>
		<th>Monto</th>
		<th>Ente Ejecutor</th>
		<th>Monto</th>
		<th>Accion</th>
</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($retencions as $retencion): ?>
	<tr>
		<td><?php echo $retencion['Retencion']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($retencion['Retencion']['canon_inst'], array('controller' => 'retencions', 'action' => 'view', $retencion['Retencion']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($retencion['Retencion']['canon_inst_monto'], array('controller' => 'retencions', 'action' => 'view', $retencion['Retencion']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($retencion['Retencion']['fondo_reserva'], array('controller' => 'retencions', 'action' => 'view', $retencion['Retencion']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($retencion['Retencion']['fondo_reserva_monto'], array('controller' => 'retencions', 'action' => 'view', $retencion['Retencion']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($retencion['Retencion']['ente_ejecutor'], array('controller' => 'retencions', 'action' => 'view', $retencion['Retencion']['id'])); ?>
		</td>
<td>
		<?php echo $this->Html->link($retencion['Retencion']['proyecto_id'], array('controller' => 'retencions', 'action' => 'view', $retencion['Retencion']['id'])); ?>
		</td>

		
	
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $retencion['Retencion']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $retencion['Retencion']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($retencion); ?>
</table>
