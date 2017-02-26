<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $is_active
 * @property string $comment
 *
 * @property MenuItem[] $menuItems
 */
class MenuCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'comment'], 'required'],
            [['is_active'], 'integer'],
            [['comment'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'is_active' => 'Активна?',
            'comment' => 'Коментарий',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuItems()
    {
        return $this->hasMany(MenuItem::className(), ['category_id' => 'id']);
    }
}
