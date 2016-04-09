<?php

use yii\db\Migration;

class m160409_022813_dashboard_insert_data extends Migration
{
    public function up()
    {

        $this->insert('dashboard', array(
            'id' => 1,
            'name' => 'My Dashboard',
            'layout_class' => 'app\dashboard\layouts\ExampleLayout',
            'sort' => 0,
            'options' => '',
            'enabled' => 1,
            )
        );

        $this->insert('dashboard', array(
            'id' => 2,
            'name' => 'Another Dashboard',
            'layout_class' => 'cornernote\dashboard\layouts\DefaultLayout',
            'sort' => 1,
            'options' => '',
            'enabled' => 1,
            )
        );

    }

    public function down()
    {
        echo "m160409_022813_dashboard_insert_data cannot be reverted.\n";

        return false;
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
