<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Menu extends Model
{
    public $menu_name;
    public $submenu_yes;
    public $menu_order;


    public function rules()
    {
        return [
           [[ 'memu_name', 'memu_order', 'submenu_yes'], 'required'],

            [['menu_order'], 'number'],
            [['menu_id', 'menu_order'], 'integer'],
            [['menu_name'], 'string', 'max' => 100],

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
            'menu_submenu_true' => 'Menu Submenu Flag',
            'menu_order' => 'Menu Order',
        ];
    }




}
