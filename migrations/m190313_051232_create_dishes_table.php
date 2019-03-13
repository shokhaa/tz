<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dishes}}`.
 */
class m190313_051232_create_dishes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dishes}}', [
            'id' => $this->primaryKey(),
            'title' =>$this->string(),
            'created_at' => $this->date(),
            'status' => $this->integer(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dishes}}');
    }
}
