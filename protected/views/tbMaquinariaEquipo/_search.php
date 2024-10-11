<?php
/** @var TbMaquinariaEquipoController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_Maquinaria_Equipo', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Maquinaria_o_Equipo', array('class' => 'span5', 'maxlength' => 75)); ?>

<?php echo $form->textFieldRow($model, 'Cantidad', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Precio_Unitario', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Total', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
