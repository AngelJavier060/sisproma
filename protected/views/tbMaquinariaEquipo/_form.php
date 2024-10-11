<div class="form">
    <?php
    /** @var TbMaquinariaEquipoController $this */
    /** @var TbMaquinariaEquipo $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-maquinaria-equipo-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>
    <div class="column">
                            <?php echo $form->textFieldRow($model, 'Maquinaria_o_Equipo', array('class' => 'span3', 'maxlength' => 75)) ?>
        </div>
    <div class="column">
                        <?php echo $form->textFieldRow($model, 'Cantidad', array('class' => 'span2')) ?>
        </div>
        <div class="column"> 
                        <?php echo $form->textFieldRow($model, 'Precio_Unitario', array('class' => 'span2')) ?>
            </div>
                        <?php //echo $form->textFieldRow($model, 'Total', array('class' => 'span5')) ?>
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