<?php

Yii::import('application.models._base.BaseTbSBasico');

class TbSBasico extends BaseTbSBasico
{
    /**
     * @return TbSBasico
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Servicio Básico|Servicios Básicos', $n);
    }

}