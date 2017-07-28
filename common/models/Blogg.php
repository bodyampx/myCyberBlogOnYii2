<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blogg".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $url
 * @property integer $status_id
 * @property integer $sort
 */
class Blogg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'url'], 'required'],
            [['id', 'status_id', 'sort'], 'integer'],
            [['sort'], 'integer' , 'max'=>99, 'min'=>1 ],
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
            'title' => 'Заголовок',
            'text' => 'Текст',
            'url' => 'Ссылка',
            'status_id' => 'Статус',
            'sort' => 'Сортировка',
        ];
    }
}
