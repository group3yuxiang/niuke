<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "exam".
 *
 * @property \MongoId|string $_id
 * @property mixed $timu
 * @property mixed $xuangxiang
 * @property mixed $question
 * @property mixed $labal
 * @property mixed $tijiid
 * @property mixed $time
 * @property mixed $ishot
 */
class Exam extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['niuke', 'exam'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'timu',
            'xuanxiang',
            'question',
            'labal',
            'tijiid',
            'time',
            'ishot',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timu', 'xuanxiang', 'question', 'labal', 'tijiid', 'time', 'ishot'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'timu' => 'Timu',
            'xuanxiang' => 'Xuanxiang',
            'question' => 'Question',
            'labal' => 'Labal',
            'tijiid' => 'Tijiid',
            'time' => 'Time',
            'ishot' => 'Ishot',
        ];
    }
}
