<?php
/** @var TbPMPSemanalController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_PMPSemanal', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'id_Produccion', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Mes', array('class' => 'span5', 'maxlength' => 20)); ?>

<?php echo $form->textFieldRow($model, 'S1', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'S2', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'S3', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'S4', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Total_Produccion', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Estandar_Produccion', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Porcentaje', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Produciendo_Planta', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
