<?php
/** @var TbPersonalController $this */
/** @var TbPersonal $data */
?>
<div class="view">
<table class="table table-striped table-bordered">                  
  <tbody>
   <tr>
        <td style="width:300px">  
        <?php if (!empty($data->Numero_Empleados)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php  echo CHtml::encode($data->getAttributeLabel('Numero_Empleados')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Numero_Empleados); ?>
            </div>
        </div>

        <?php endif; ?>
         </td>
       
    <td style="width:300px">  
        <?php if (!empty($data->Cargo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Cargo')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Cargo); ?>
            </div>
        </div>

        <?php endif; ?>
    </td>
   
    <td style="width:300px">             
        <?php if (!empty($data->Dias_laborados)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Dias_laborados')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Dias_laborados); ?>
            </div>
        </div>

        <?php endif; ?>
      </td>
    <td style="width:300px">            
        <?php if (!empty($data->Sueldo_Basico)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Sueldo_Basico')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Sueldo_Basico); ?>
            </div>
        </div>

        <?php endif; ?>
      </td>
    <td style="width:300px">                            
        <?php if (!empty($data->Sueldo_Nominal)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Sueldo_Nominal')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Sueldo_Nominal); ?>
            </div>
        </div>

        <?php endif; ?>
      </td>
    <td style="width:300px">                            
        <?php if (!empty($data->HE_50)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('HE_50')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->HE_50); ?>
            </div>
        </div>

        <?php endif; ?>
       </td>
    <td style="width:300px">                           
        <?php if (!empty($data->HE_100)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('HE_100')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->HE_100); ?>
            </div>
        </div>
      </td>
    <td style="width:300px">            
        <?php endif; ?>
                
        <?php if (!empty($data->HE_Total)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('HE_Total')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->HE_Total); ?>
            </div>
        </div>

        <?php endif; ?>
        </td>
    <td style="width:300px">                          
        <?php if (!empty($data->Valor_HE)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Valor_HE')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Valor_HE); ?>
            </div>
        </div>

        <?php endif; ?>
       </td>
    <td style="width:300px">                           
        <?php if (!empty($data->Provisiones_XIII)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Provisiones_XIII')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Provisiones_XIII); ?>
            </div>
        </div>

        <?php endif; ?>
        </td>
    <td style="width:300px">                          
        <?php if (!empty($data->Provisiones_XIV)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Provisiones_XIV')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Provisiones_XIV); ?>
            </div>
        </div>

        <?php endif; ?>
           </td>
           
           
            <td style="width:300px">                       
        <?php if (!empty($data->Fondo_reserva)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Fondo_reserva')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Fondo_reserva); ?>
            </div>
        </div>

        <?php endif; ?>
       </td>
           
           
    <td style="width:300px">                       
        <?php if (!empty($data->Total_Ingresos)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Total_Ingresos')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Total_Ingresos); ?>
            </div>
        </div>

        <?php endif; ?>
       </td>
 
       
    <td style="width:300px">                           
        <?php if (!empty($data->Aporte_IESS)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Aporte_IESS')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Aporte_IESS); ?>
            </div>
        </div>

        <?php endif; ?>
      </td>
    <td style="width:300px">                            
        <?php if (!empty($data->Total_Egresos)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Total_Egresos')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Total_Egresos); ?>
            </div>
        </div>

        <?php endif; ?>
       </td>
    <td style="width:300px">                           
        <?php if (!empty($data->Pago_Total_Mensual)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Pago_Total_Mensual')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Pago_Total_Mensual); ?>
            </div>
        </div>

        <?php endif; ?>
      </td>
    <td style="width:300px">                            
        <?php if (!empty($data->Pago_Anual)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Pago_Anual')); ?> </b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Pago_Anual); ?>
            </div>
        </div>

        <?php endif; ?>
    </td>
    </tr>
   </tbody>
 </table>
    </div>