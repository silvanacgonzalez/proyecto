<!-- File: /app/View/Proyectos/index.ctp -->
<h1>Proyectos</h1>
<table>
	<?php echo $this->Html->link('Agregar Proyecto', array('controller' => 'proyectos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Fecha Inicio Real</th>
		<th>Fecha Fin real</th>
		<th>Presupuesto Real</th>
		<th>fecha retorno acta</th>
		<th>Coordinador</th>
		<th>Aval Legal</th>
		<th>Aval Dpto</th>
		<th>Aval Admin</th>
		<th>Aval Dpto</th>
		<th>Aval SEU</th>
		<th>Acciones</th>
	</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($proyectos as $proyecto): ?>
	<tr>
		<td><?php echo $proyecto['Proyecto']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['nombre'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['fecha_ini_real'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['fecha_fin_real'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['presupuesto_real'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['fecha_retorno_acta'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['coordinador'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['aval_legal'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['aval_dpto'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['aval_admin'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($proyecto['Proyecto']['aval_seu'], array('controller' => 'proyectos', 'action' => 'view', $proyecto['Proyecto']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $proyecto['Proyecto']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $proyecto['Proyecto']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($proyecto); ?>
</table>
