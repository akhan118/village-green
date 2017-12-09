<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "submenus".
 *
 * @property integer $submenu_id
 * @property string $submenu_name
 * @property integer $visible_or_invisible
 * @property string $picture_path
 * @property string $text_field
 * @property integer $menu_id
 *
 * @property Menu $submenus
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
            ['submenu_name',  'required'],
            [['visible_or_invisible', 'menu_id'], 'integer'],
            [['submenu_name', 'picture_path', 'text_field'], 'string', 'max' => 32],
            [['submenu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['submenu_id' => 'menu_id']],
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
            'visible_or_invisible' => 'Visible Or Invisible',
            'picture_path' => 'Picture Path',
            'text_field' => 'Text Field',
            'menu_id' => 'Menu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubmenu()
    {
        return $this->hasOne(Menu::className(), ['menu_id' => 'submenu_id']);
    }
}
