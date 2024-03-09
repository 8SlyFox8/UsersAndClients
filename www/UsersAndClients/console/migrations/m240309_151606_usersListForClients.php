<?php

use yii\db\Migration;

/**
 * Class m240309_151606_usersListForClients
 */
class m240309_151606_usersListForClients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'usersListForClients',
            [
                'id' => $this->primaryKey(),
                'users_id' => $this->integer()->notNull(),
                'usersListForGroups_id' => $this->integer(),
                'clients_id' => $this->integer()->notNull()
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usersListForClients');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240309_151606_usersListForClients cannot be reverted.\n";

        return false;
    }
    */
}
