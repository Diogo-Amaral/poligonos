<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "triangulos".
 *
 * @property int $id
 * @property double $base
 * @property double $altura
 */
class Triangulo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'triangulos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['base', 'altura'], 'required'],
            [['base', 'altura'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'base' => 'Base',
            'altura' => 'Altura',
        ];
    }
}
