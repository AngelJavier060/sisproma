<div class="form">
    <?php
    /** @var TbPersonalController $this */
    /** @var TbPersonal $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'id' => 'tb-personal-form',
        'enableAjaxValidation' => true,
        'enableClientValidation' => false,
    ));
    ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
    <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

<?php //echo $form->textFieldRow($model, 'Cargo', array('class' => 'span5', 'maxlength' => 75))  ?>
    <!--AUTOCOMPLETAR-->
    <div class="">
        <h4>Cargo:</h4>
        <?php
        $this->widget('bootstrap.widgets.TbTypeahead', array(
            'name' => 'Cargo',
             'model'=>$model,
               'attribute'=>'Cargo', 
            'options' => array(
                'source' => array(
                    'PRODUCCIÓN: Obreros',
                    'PRODUCCIÓN: Supervisor de Producción',
                    'ADMINISTRATIVO: Gerente General',
                    'ADMINISTRATIVO: Contador General',
                    'ADMINISTRATIVO: Ayudante de Contabilidad',
                    'ADMINISTRATIVO: Secretaria',
                    'ADMINISTRATIVO: Logistica',
                    'VENTAS: Vendedores',
                    'SEGURIDAD: Guardián'
                ),
                'items' => 4,
                'matcher' => "js:function(item) {
                                            return ~item.toLowerCase().indexOf(this.query.toLowerCase());
                                        }",
            ),
        ));
        ?>
    </div>
    <br>
    <div class="column">
        <?php echo $form->textFieldRow($model, 'Numero_Empleados', array('class' => 'span1')) ?>
    </div>
    <div class="column">
        <?php echo $form->textFieldRow($model, 'Dias_laborados', array('class' => 'span1')) ?>
    </div>
    <div class="column">
        <?php echo $form->textFieldRow($model, 'Sueldo_Basico', array('class' => 'span1')) ?>
    </div>
    <div class="column">
<?php // echo $form->textFieldRow($model, 'Sueldo_Nominal', array('class' => 'span5'))  ?>

        <?php echo $form->textFieldRow($model, 'HE_50', array('class' => 'span1')) ?>
    </div>
    <div class="column">
    <?php echo $form->textFieldRow($model, 'HE_100', array('class' => 'span1')) ?>
    </div>
    <?php // echo $form->textFieldRow($model, 'HE_Total', array('class' => 'span5')) ?>
    <?php // echo $form->textFieldRow($model, 'Valor_HE', array('class' => 'span5')) ?>
    <?php //echo $form->textFieldRow($model, 'Provisiones_XIII', array('class' => 'span5')) ?>
    <?php //echo $form->textFieldRow($model, 'Provisiones_XIV', array('class' => 'span5')) ?>
    <?php //echo $form->textFieldRow($model, 'Total_Ingresos', array('class' => 'span5')) ?>
    <?php //echo $form->textFieldRow($model, 'Aporte_IESS', array('class' => 'span5')) ?>
<?php //echo $form->textFieldRow($model, 'Total_Egresos', array('class' => 'span5'))  ?>
        <?php //echo $form->textFieldRow($model, 'Pago_Total_Mensual', array('class' => 'span5'))  ?>
        <?php //echo $form->textFieldRow($model, 'Pago_Anual', array('class' => 'span5')) ?>

    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
        ));
        ?>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
    //'buttonType'=>'submit',
    'label' => Yii::t('AweCrud.app', 'Cancel'),
    'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
));
?>
        <div>

<?php $this->endWidget(); ?>
        </div>
    </div>
</div>