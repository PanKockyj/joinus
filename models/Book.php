<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $book_id
 * @property string $book_name
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_id'], 'required'],
            [['book_id'], 'integer'],
            [['book_name'], 'string', 'max' => 200]
        ];
    }

    

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'book_id' => Yii::t('app', 'Book ID'),
            'book_name' => Yii::t('app', 'Book Name'),
        ];
    }
}
