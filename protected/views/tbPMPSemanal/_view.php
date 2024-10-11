<?php
/** @var TbPMPSemanalController $this */
/** @var TbPMPSemanal $data */
?>
<div class="view">
                    
        <?php if (!empty($data->id_Produccion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_Produccion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->id_Produccion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Mes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Mes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Mes); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->S1)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('S1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->S1); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->S2)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('S2')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->S2); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->S3)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('S3')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->S3); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->S4)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('S4')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->S4); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Total_Produccion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Total_Produccion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Total_Produccion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Estandar_Produccion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Estandar_Produccion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Estandar_Produccion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Porcentaje)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Porcentaje')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Porcentaje); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Produciendo_Planta)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Produciendo_Planta')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Produciendo_Planta); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>