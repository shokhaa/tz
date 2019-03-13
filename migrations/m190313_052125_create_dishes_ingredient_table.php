<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dishes_ingredient}}`.
 */
class m190313_052125_create_dishes_ingredient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dishes_ingredient}}', [
            'id' => $this->primaryKey(),
            'dishID' => $this->integer(),
            'ingredientID' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dishes_ingredient}}');
    }
}
