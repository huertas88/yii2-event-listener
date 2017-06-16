<?php

namespace huertas88\elistener\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "log_email".
 *
 * @property string $id_log_email
 * @property integer $is_successful
 * @property string $from
 * @property string $to
 * @property string $reply
 * @property string $cc
 * @property string $bcc
 * @property string $subject
 * @property string $body
 * @property string $time
 */
class LogEmail extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log_email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_successful'], 'integer'],
            [['body'], 'string'],
            [['from', 'to', 'cc', 'bcc'], 'string', 'max' => 1000],
            [['reply'], 'string', 'max' => 100],
            [['subject'], 'string', 'max' => 500],
            [['time'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_log_email' => Yii::t('elistener', 'Id Log Email'),
            'is_successful' => Yii::t('elistener', 'Is Successful'),
            'from' => Yii::t('elistener', 'From'),
            'to' => Yii::t('elistener', 'To'),
            'reply' => Yii::t('elistener', 'Reply'),
            'cc' => Yii::t('elistener', 'Cc'),
            'bcc' => Yii::t('elistener', 'Bcc'),
            'subject' => Yii::t('elistener', 'Subject'),
            'body' => Yii::t('elistener', 'Body'),
            'time' => Yii::t('elistener', 'Time'),
        ];
    }
}
