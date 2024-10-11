<?php
/** @var TbConsumoEnergiaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_Consumo_Energia', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'id_Balance', CHtml::listData(TbBalance::model()->findAll(), 'id_Balance', TbBalance::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'Cantidad', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Detalle', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'Kv_por_Hora', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Total', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
