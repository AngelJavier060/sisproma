<?php
/** @var TbClienteController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_cliente', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Nombre_Comercial', array('class' => 'span5', 'maxlength' => 75)); ?>

<?php echo $form->textFieldRow($model, 'Cliente', array('class' => 'span5', 'maxlength' => 75)); ?>

<?php echo $form->textFieldRow($model, 'Telefono', array('class' => 'span5', 'maxlength' => 15)); ?>

<?php echo $form->textFieldRow($model, 'Provincia', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'Ciudad', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'Dirección', array('class' => 'span5', 'maxlength' => 75)); ?>

<?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 45)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
