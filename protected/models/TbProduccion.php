<?php

Yii::import('application.models._base.BaseTbProduccion');

class TbProduccion extends BaseTbProduccion
{
    /**
     * @return TbProduccion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Producción|Producciones', $n);
    }

}