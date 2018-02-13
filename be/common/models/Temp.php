<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "temp".
 *
 * @property string $id
 * @property integer $temp
 * @property string $create_time
 */
class Temp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['temp'], 'required'],
            [['temp'], 'integer'],
            [['create_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'temp' => 'Temp',
            'create_time' => 'Create Time',
        ];
    }

    public static function saveTemp($temp) {
        $record = new self();
        $record->temp = $temp;
        return $record->save();
    }

    public static function gcTemp($olderThan) {
        return self::deleteAll(['<', 'create_time', $olderThan]);
    }
}
