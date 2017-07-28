<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $url
 * @property integer $status_id
 * @property integer $sort
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'url'], 'required'],
            [['id', 'status_id', 'sort'], 'integer'],
            [['text'], 'string'],
            [['title', 'url'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'url' => 'Url',
            'status_id' => 'Status ID',
            'sort' => 'Sort',
        ];
    }
}
