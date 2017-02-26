<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_item".
 *
 * @property integer $id
 * @property string $name
 * @property string $weight
 * @property string $price
 * @property string $is_active
 * @property string $action_enabled
 * @property string $position
 * @property string $created_at
 * @property string $comment
 * @property integer $category_id
 *
 * @property MenuCategory $category
 */
class MenuItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'weight', 'price', 'position', 'comment', 'category_id'], 'required'],
            [['created_at'], 'safe'],
            [['comment'], 'string'],
            [['category_id'], 'integer'],
            [['name', 'weight', 'price'], 'string', 'max' => 255],
            [['is_active', 'action_enabled'], 'string', 'max' => 1],
            [['position'], 'string', 'max' => 10],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'weight' => 'Вес',
            'price' => 'Цена',
            'is_active' => 'Активно?',
            'action_enabled' => 'Акция',
            'position' => 'Позиция',
            'created_at' => 'Добавлено',
            'comment' => 'Коментарий',
            'category_id' => 'Категория',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(MenuCategory::className(), ['id' => 'category_id']);
    }
}
