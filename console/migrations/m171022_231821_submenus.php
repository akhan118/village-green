<?php

use yii\db\Migration;

class m171022_231821_submenus extends Migration
{
    public function up()
    {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }

      $this->createTable('{{%submenus}}', [
          'submenu_id' => $this->primaryKey(),
          'submenu_name' => $this->string(32)->notNull(),
          'visible_or_invisible' => $this->smallInteger()->notNull(),
          'picture_path' => $this->string(32),
          'text_field' => $this->string(32)->notNull(),


      ], $tableOptions);

      // add foreign key for table `menu`
      $this->addForeignKey(
          'menu_submenu',
          'submenus',
          'submenu_id',
          'menu',
          'menu_id',
          'CASCADE'
      );

    }

    public function down()
    {
        echo "m171022_231821_submenus cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171022_231821_submenus cannot be reverted.\n";

        return false;
    }
    */
}
