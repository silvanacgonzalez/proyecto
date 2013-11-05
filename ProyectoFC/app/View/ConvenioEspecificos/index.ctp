<!-- File: /app/View/ConvenioEspecificos/index.ctp -->
<h1>Convenio Especifico</h1>
<table>
	<?php echo $this->Html->link('Agregar Convenio Especifico', array('controller' => 'convenioespecificos', 'action' => 'add')); ?>
	<tr>
		<th>Id</th>
		<th>Fecha Devolucion</th>
		<th>responsable utn</th>
		<th>responsable comitente</th>
		<th>Fecha Inicio</th>
		<th>Fecha Fin</th>
		<th>Fecha Firma</th>
		<th>Firma UTN</th>
		<th>Cargo UTN</th>
		<th>Firma Comitente</th>
		<th>Cargo Comitente</th>
		<th>Objetivo</th>
		<th>Duracion</th>
		<th>Cargo UTN</th>
		<th>Observaciones</th>
	    <th>Monto</th>
		<th>Estado</th>
		<th>Departamento</th>
		<th>Grupo</th>
		<th>Comitente</th>
		<th>Proyecto</th>
		<th>Entidad Firmante</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($convenioespecificos as $convenioespecifico): ?>
	<tr>
		<td><?php echo $convenioespecifico['ConvenioEspecifico']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['fecha_devolucion'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['fecha_devolucion'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['responsable_utn'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['responsable_utn'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['responsable_comit'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['responsable_comit'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['fecha_ini'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['fecha_ini'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['fecha_fin'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['fecha_fin'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['fecha_firma'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['fecha_firma'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['firm_utn_nombre'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['firm_utn_nombre'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['firm_utn_cargo'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['firm_utn_cargo'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['firm_comit_nombre'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['firm_comit_nombre'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['firm_comit_cargo'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['firm_comit_cargo'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['objetivo'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['objetivo'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['duracion'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['duracion'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['observaciones'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['observaciones'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['monto'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['monto'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['estado'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['estado'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['departamento_id'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['departamento_id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['grupo_id'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['grupo_id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['comitente_id'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['comitente_id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['proyecto_id'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['proyecto_id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['entidad_firmante_id'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['entidad_firmante_id'])); ?>
		</td>
		
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $convenioespecifico['ConvenioEspecifico']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $convenioespecifico['ConvenioEspecifico']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($convenioespecifico); ?>
</table>