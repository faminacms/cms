<?php

use yii\db\Schema;
use yii\db\Migration;

class m150105_075235_blog_post extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%blog_post}}', [
                'id' => Schema::TYPE_PK,
                'title' => Schema::TYPE_STRING . ' NOT NULL',
                'alias' => Schema::TYPE_STRING . ' NOT NULL',
                'content' => Schema::TYPE_TEXT . ' NOT NULL',
                'keywords' => Schema::TYPE_STRING . '',
                'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0',
                'created_by' => Schema::TYPE_INTEGER . ' NOT NULL',
                'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
                'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%blog_post}}');
    }
}
