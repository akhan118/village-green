<?php
namespace backend\models;
use yii\base\Model;
use app\models\Pages;

/**
 * Signup form
 */
class PagesForm extends Model
{
    public $page_id;
    public $page_html;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['page_id','required'],
            ['page_html','required'],

        ];
    }

    /**
     *
     */
    public function SavePages()
    {
      if ($this->validate()) {
          $form=new Pages();
          $form->page_id = $this->page_id;
          $form->page_html = $this->page_html;
          $form->save();

          var_dump("True SavePage");
          return true;

      }else{
        echo "false";
        return false;
      }
    }

}
