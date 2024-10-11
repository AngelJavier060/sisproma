<div class="form">
    <?php
    /** @var TbProduccionController $this */
    /** @var TbProduccion $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-produccion-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                    <?php //echo $form->textFieldRow($model, 'id_Produccion', array('class' => 'span5')) ?>
                        <?php echo $form->dropDownListRow($model, 'id_Balance', CHtml::listData(TbBalance::model()->findAll(), 'id_Balance', TbBalance::representingColumn())) ?>
                        <?php echo $form->textFieldRow($model, 'Producto', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->textFieldRow($model, 'Porcentaje', array('class' => 'span5')) ?>
                        <?php // echo $form->textFieldRow($model, 'Kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'gr_funda', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Unidades_dia', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Valor_unitario', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Valor_Total_dia', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Unidades_mes', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Valor_Total_mes', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Unidades_anio', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Valor_Total_anio', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Stock', array('class' => 'span5')) ?>
                <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>