<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $menu_id
 * @property string $menu_name
 * @property integer $menu_submenu_true
 * @property integer $menu_order
 *
 * @property Submenus $submenus
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_name', 'menu_submenu_true'], 'required'],
            [['menu_submenu_true', 'menu_order'], 'integer'],
            [['menu_name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'menu_name' => 'Menu Name',
            'menu_submenu_true' => 'Menu Submenu True',
            // 'menu_order' => 'Menu Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubmenus()
    {
        return $this->hasOne(Submenus::className(), ['submenu_id' => 'menu_id']);
    }
}
