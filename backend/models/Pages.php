<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $page_id
 * @property string $page_html
 * @property integer $menu_id
 * @property integer $submenu_id
 *
 * @property Menu $menu
 * @property Submenus $submenu
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_html'], 'string'],
            [['menu_id'], 'required'],
            [['menu_id', 'submenu_id'], 'integer'],
                  ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'page_id' => 'Page ID',
            'page_html' => 'Page Html',
            'menu_id' => 'Menu ID',
            'submenu_id' => 'Submenu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['menu_id' => 'menu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubmenu()
    {
        return $this->hasOne(Submenus::className(), ['submenu_id' => 'submenu_id']);
    }
}
