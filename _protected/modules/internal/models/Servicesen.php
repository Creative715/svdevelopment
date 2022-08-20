<?php

namespace app\modules\internal\models;

use Yii;

/**
 * This is the model class for table "servicesen".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $description
 */
class Servicesen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicesen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'description'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'description' => 'Description',
        ];
    }
}
