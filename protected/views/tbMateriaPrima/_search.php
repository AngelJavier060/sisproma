<?php
/** @var TbMateriaPrimaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_MateriaPrima', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'id_Balance', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Materia_Prima_e_Insumos', array('class' => 'span5', 'maxlength' => 75)); ?>

<?php echo $form->textFieldRow($model, 'Capacidad_mes', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Precio', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Total', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
