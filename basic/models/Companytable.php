<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "companytable".
 *
 * @property int $No
 * @property string $Name
 * @property string $Type
 * @property string $Address
 * @property string $Phone
 */
class Companytable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companytable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Type', 'Address', 'Phone'], 'required'],
            [['Name', 'Type', 'Address'], 'string', 'max' => 255],
            [['Phone'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No' => 'No',
            'Name' => 'Name',
            'Type' => 'Type',
            'Address' => 'Address',
            'Phone' => 'Phone',
        ];
    }
}
