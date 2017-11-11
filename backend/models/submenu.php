<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "submenu".
 *
 * @property integer $submenu_id
 * @property string $submenu_name
 * @property integer $visible_or_invisible
 * @property integer $menu_id
 * @property string picture_path
 * @property string text_field
 *
 * @property Submenus $submenus
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
            [['submenu_name', 'submenu_id', 'visible_or_invisible'],['text_field'], ['menu_id'] 'required'],
            [['submenu_id', 'menu_id'], 'integer'],
            [['submenu_name','picture_path', 'text_field'], 'string', 'max' => 32],
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
            'visible_or_invisible' => 'Is this visible?',
            'menu_id' => 'Menu Id',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubmenus()
    {
        return $this->hasOne(Submenus::className(), ['menu_id' => 'menu_id']);
    }
}
