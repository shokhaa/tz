<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ingredients}}`.
 */
class m190313_040050_create_ingredients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ingredients}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100),
            'show' => $this->boolean()->defaultValue(true),
            'status' => $this->integer(1),
            'created_at' => $this->date()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ingredients}}');
    }
}
