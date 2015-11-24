<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "tiji".
 *
 * @property \MongoId|string $_id
 * @property mixed $title
 * @property mixed $num
 * @property mixed $peoplenum
 * @property mixed $nandu
 */
class Tiji extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['niuke', 'tiji'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'title',
            'num',
            'peoplenum',
            'nandu',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'num', 'peoplenum', 'nandu'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'title' => 'Title',
            'num' => 'Num',
            'peoplenum' => 'Peoplenum',
            'nandu' => 'Nandu',
        ];
    }
}
