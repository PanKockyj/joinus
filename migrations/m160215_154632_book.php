<?php

use yii\db\Schema;
use yii\db\Migration;

class m160215_154632_book extends Migration
{
    public function up()
    {
        $this->createTable('book', [
            'book_id' => 'INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'book_name' => 'VARCHAR(200)',
            ]);

    }

    public function down()
    {
        $this->dropTable('book');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
