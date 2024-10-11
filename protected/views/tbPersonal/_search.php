<?php
/** @var TbPersonalController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_Personal', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Cargo', array('class' => 'span5', 'maxlength' => 75)); ?>

<?php echo $form->textFieldRow($model, 'Numero_Empleados', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Dias_laborados', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Sueldo_Basico', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Sueldo_Nominal', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'HE_50', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'HE_100', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'HE_Total', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Valor_HE', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Provisiones_XIII', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Provisiones_XIV', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Total_Ingresos', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Aporte_IESS', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Total_Egresos', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Pago_Total_Mensual', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Pago_Anual', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
