<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "practice_sort".
 *
 * @property \MongoId|string $_id
 * @property mixed $name
 * @property mixed $pid
 * @property mixed $level
 */
class PracticeSort extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['niuke', 'practice_sort'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'name',
            'pid',
            'level',
			'type',
			'display'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'pid', 'level'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'name' => 'Name',
            'pid' => 'Pid',
            'level' => 'Level',
        ];
    }


}
