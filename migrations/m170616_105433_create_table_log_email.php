<?php

use yii\db\Migration;

class m170616_105433_create_table_log_email extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%log_email}}', [
            'id_log_email' => $this->bigInteger(20)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'is_successful' => $this->smallInteger(4),
            'from' => $this->string(1000),
            'to' => $this->string(1000),
            'reply' => $this->string(100),
            'cc' => $this->string(1000),
            'bcc' => $this->string(1000),
            'subject' => $this->string(500),
            'body' => $this->text(),
            'time' => $this->string(45),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%log_email}}');
    }
}
