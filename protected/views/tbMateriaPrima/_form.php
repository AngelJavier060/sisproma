<div class="form">
    <?php
    /** @var TbMateriaPrimaController $this */
    /** @var TbMateriaPrima $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-materia-prima-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php // echo $form->textFieldRow($model, 'id_Balance', array('class' => 'span5')) ?>
    <?php echo $form->dropDownListRow($model, 'id_Balance', CHtml::listData(TbBalance::model()->findAll(), 'id_Balance', TbBalance::representingColumn())) ?>
                        <?php echo $form->textFieldRow($model, 'Materia_Prima_e_Insumos', array('class' => 'span5', 'maxlength' => 75)) ?>
                        <?php echo $form->textFieldRow($model, 'Capacidad_mes', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Precio', array('class' => 'span5')) ?>
                        <?php // echo $form->textFieldRow($model, 'Total', array('class' => 'span5')) ?>
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