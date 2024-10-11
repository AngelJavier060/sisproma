<?php

Yii::import('application.models._base.BaseTbPMPSemanal');

class TbPMPSemanal extends BaseTbPMPSemanal
{
    /**
     * @return TbPMPSemanal
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Plan maestro de producción semanal|Planes maestros de producción semanal', $n);
    }

}