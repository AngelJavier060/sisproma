<?php
/** @var TbProduccionController $this */
/** @var TbProduccion $data */
?>
<div class="view">
                    
        <?php if (!empty($data->idBalance->Producto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_Balance')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->idBalance->Producto); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Producto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Producto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Producto); ?>
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
                
        <?php if (!empty($data->Kg)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Kg')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Kg); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->gr_funda)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('gr_funda')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->gr_funda); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Unidades_dia)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Unidades_dia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Unidades_dia); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Valor_unitario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Valor_unitario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Valor_unitario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Valor_Total_dia)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Valor_Total_dia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Valor_Total_dia); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Unidades_mes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Unidades_mes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Unidades_mes); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Valor_Total_mes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Valor_Total_mes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Valor_Total_mes); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Unidades_anio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Unidades_anio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Unidades_anio); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Valor_Total_anio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Valor_Total_anio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Valor_Total_anio); ?>
            </div>
        </div>

        <?php endif; ?>
    
    
    
       <?php if (!empty($data->Stock)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Stock')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Stock); ?>
            </div>
        </div>

        <?php endif; ?>
    
    
    </div>