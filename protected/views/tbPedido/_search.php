<?php
/** @var TbPedidoController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_Pedido', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'id_Produccion', CHtml::listData(TbProduccion::model()->findAll(), 'id_Produccion', TbProduccion::representingColumn())); ?>

<?php echo $form->dropDownListRow($model, 'id_Cliente', CHtml::listData(TbCliente::model()->findAll(), 'id_cliente', TbCliente::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'Cantidad', array('class' => 'span5', 'maxlength' => 45)); ?>

<?php // echo $form->datepickerRow($model, 'Fecha_pedido', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php // echo $form->datepickerRow($model, 'Fecha_entrega', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'Valor_Total', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Estado', array('class' => 'span5', 'maxlength' => 45)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
