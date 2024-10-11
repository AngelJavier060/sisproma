<?php

Yii::import('application.models._base.BaseTbMaquinariaEquipo');

class TbMaquinariaEquipo extends BaseTbMaquinariaEquipo
{
    /**
     * @return TbMaquinariaEquipo
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Maquinaria o Equipo|Maquinarias o Equipos', $n);
    }

}