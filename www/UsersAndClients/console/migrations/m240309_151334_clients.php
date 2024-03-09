<?php

use yii\db\Migration;

/**
 * Class m240309_151334_clients
 */
class m240309_151334_clients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'clients',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(255)->notNull(),
                'description' => $this->text(),
                'account_type' => $this->integer(4)->defaultValue(1)->notNull(),
                'balance' => $this->float(8)->defaultValue(0),
                'created_by' => $this->integer(4),
                'updated_by' => $this->integer(4),
                'created_at' => $this->integer(4),
                'updated_at' => $this->integer(4),
                'status' => $this->integer(4)->defaultValue(1),
                'deleted' => $this->boolean()->defaultValue(false)
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('clients');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240309_151334_clients cannot be reverted.\n";

        return false;
    }
    */
}
