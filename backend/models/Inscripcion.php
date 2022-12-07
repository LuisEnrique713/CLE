<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "inscripcion".
 *
 * @property int $id
 * @property string $Nombre_Del_Estudiante
 * @property string $matricula
 * @property string $Comprobante_De_pago
 * @property int $curso_id
 * @property int $perfil_id
 * @property int $nivel_id
 *
 * @property Curso $curso
 * @property Nivel $nivel
 * @property Perfil $perfil
 */
class Inscripcion extends \yii\db\ActiveRecord
{ 
    public $comprobante;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inscripcion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre_Del_Estudiante', 'matricula', 'curso_id', 'perfil_id', 'nivel_id'], 'required'],
            [['curso_id', 'perfil_id', 'nivel_id'], 'integer'],
            [['Nombre_Del_Estudiante', 'matricula'], 'string', 'max' => 45],

            [['comprobante'], 'file', 'extensions' => 'pdf'],

            [['curso_id'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::class, 'targetAttribute' => ['curso_id' => 'id']],
            [['nivel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nivel::class, 'targetAttribute' => ['nivel_id' => 'id']],
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
            'Nombre_Del_Estudiante' => Yii::t('app', 'Nombre Del Estudiante'),
            'matricula' => Yii::t('app', 'Matricula'),

            'comprobante' => Yii::t('app', 'Comprobante De Pago'),

            'curso_id' => Yii::t('app', 'Módulo'),
            'perfil_id' => Yii::t('app', 'Perfil Del Usuario'),
            'nivel_id' => Yii::t('app', 'Nivel '),
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
     * Gets query for [[Nivel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNivel()
    {
        return $this->hasOne(Nivel::class, ['id' => 'nivel_id']);
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
}
