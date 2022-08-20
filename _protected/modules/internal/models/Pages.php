<?php

namespace app\modules\internal\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $title
 * @property string $anounce
 * @property string $content
 * @property string $description
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'anounce', 'content', 'description'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['anounce'], 'string', 'max' => 750],
            [['description'], 'string', 'max' => 180],
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
            'anounce' => 'Anounce',
            'content' => 'Content',
            'description' => 'Description',
        ];
    }
}
