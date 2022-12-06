<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "avisos".
 *
 * @property int $id
 * @property string $fecha
 * @property string $avisos_y_noticias
 */
class Avisos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avisos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'avisos_y_noticias'], 'required'],
            [['fecha'], 'safe'],
            [['avisos_y_noticias'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fecha' => Yii::t('app', 'Fecha'),
            'avisos_y_noticias' => Yii::t('app', 'Avisos Y Noticias'),
        ];
    }
}
