<?php
/** @var TbSBasicoController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_SBasico', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Servicio_Basico', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'Capacidad', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Precio', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Total', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Descripcion', array('class' => 'span5', 'maxlength' => 200)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
