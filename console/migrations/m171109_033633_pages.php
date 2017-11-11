<?php

use yii\db\Migration;

/**
 * Class m171109_033633_pages
 */
class m171109_033633_pages extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }

      $this->createTable('{{%pages}}', [
          'page_id' => $this->primaryKey(),
          'page_html' => $this->text(),
      ], $tableOptions);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171109_033633_pages cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171109_033633_pages cannot be reverted.\n";

        return false;
    }
    */
}
