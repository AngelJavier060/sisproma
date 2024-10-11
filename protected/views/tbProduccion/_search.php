<?php
/** @var TbProduccionController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id_Produccion', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'id_Balance', CHtml::listData(TbBalance::model()->findAll(), 'id_Balance', TbBalance::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'Producto', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->textFieldRow($model, 'Porcentaje', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Kg', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'gr_funda', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Unidades_dia', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Valor_unitario', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Valor_Total_dia', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Unidades_mes', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Valor_Total_mes', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Unidades_anio', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'Valor_Total_anio', array('class' => 'span5')); ?>
<?php echo $form->textFieldRow($model, 'Stock', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
