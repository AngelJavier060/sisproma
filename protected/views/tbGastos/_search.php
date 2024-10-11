<?php
/** @var TbGastosController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_Gastos', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Gasto', array('class' => 'span5', 'maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'Al_mes', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Cantidad_meses', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Total', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
