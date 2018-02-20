<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "submenus".
 *
 * @property integer $submenu_id
 * @property string $submenu_name
 * @property integer $menu_id
 *
 * @property Pages[] $pages
 * @property Menu $menu
 */
class Submenus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'submenus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['submenu_name', 'menu_id'], 'required'],
            [['menu_id'], 'integer'],
            [['submenu_name'], 'string', 'max' => 32],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'menu_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'submenu_id' => 'Submenu ID',
            'submenu_name' => 'Submenu Name',
            'menu_id' => 'Menu Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Pages::className(), ['submenu_id' => 'submenu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['menu_id' => 'menu_id']);
    }
}
