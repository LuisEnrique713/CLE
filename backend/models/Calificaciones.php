<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "calificaciones".
 *
 * @property int $id
 * @property float $Parcial_1
 * @property float $Parcial_2
 * @property float $Parcial_3
 * @property float $Parcial_4
 * @property float $Promedio_Total
 * @property int $perfil_id
 * @property int $curso_id
 *
 * @property Curso $curso
 * @property Perfil $perfil
 */
class Calificaciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calificaciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Parcial_1', 'Parcial_2', 'Parcial_3', 'Parcial_4', 'Promedio_Total', 'perfil_id', 'curso_id'], 'required'],
            [['Parcial_1', 'Parcial_2', 'Parcial_3', 'Parcial_4', 'Promedio_Total'], 'number'],
            [['perfil_id', 'curso_id'], 'integer'],
            [['curso_id'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::class, 'targetAttribute' => ['curso_id' => 'id']],
            [['perfil_id'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::class, 'targetAttribute' => ['perfil_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Parcial_1' => Yii::t('app', 'Parcial 1'),
            'Parcial_2' => Yii::t('app', 'Parcial 2'),
            'Parcial_3' => Yii::t('app', 'Parcial 3'),
            'Parcial_4' => Yii::t('app', 'Parcial 4'),
            'Promedio_Total' => Yii::t('app', 'Promedio Total'),
            'perfil_id' => Yii::t('app', 'Perfil ID'),
            'curso_id' => Yii::t('app', 'Curso ID'),
        ];
    }

    /**
     * Gets query for [[Curso]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurso()
    {
        return $this->hasOne(Curso::class, ['id' => 'curso_id']);
    }

    /**
     * Gets query for [[Perfil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerfil()
    {
        return $this->hasOne(Perfil::class, ['id' => 'perfil_id']);
    }

    public function getIdPerfil()
    {
        return $this->hasOne(Perfil::className(), ['perfil_id' => 'perfil_id']);
    }
}
