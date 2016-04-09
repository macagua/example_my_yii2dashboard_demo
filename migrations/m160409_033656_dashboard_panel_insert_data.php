<?php

use yii\db\Migration;

class m160409_033656_dashboard_panel_insert_data extends Migration
{
    public function up()
    {

        $this->insert('dashboard_panel', array(
            'id' => 1,
            'name' => 'Collection Requested',
            'panel_class' => 'app\dashboard\panels\ExamplePanel',
            'options' => '{"jobStatus":"JobWorkflow\/requested","jobType":"collect"}',
            'dashboard_id' => 1,
            'region' => 'column-1',
            'sort' => 0,
            'enabled' => 1,
            )
        );

        $this->insert('dashboard_panel', array(
            'id' => 2,
            'name' => 'Collection Scheduled',
            'panel_class' => 'app\dashboard\panels\ExamplePanel',
            'options' => '{"jobStatus":"JobWorkflow\/scheduled","jobType":"collect"}',
            'dashboard_id' => 1,
            'region' => 'column-1',
            'sort' => 1,
            'enabled' => 1,
            )
        );

        $this->insert('dashboard_panel', array(
            'id' => 3,
            'name' => 'Collection Scheduled',
            'panel_class' => 'app\dashboard\panels\ExamplePanel',
            'options' => '{"jobStatus":"JobWorkflow\/collected","jobType":"collect"}',
            'dashboard_id' => 1,
            'region' => 'column-1',
            'sort' => 2,
            'enabled' => 1,
            )
        );

        $this->insert('dashboard_panel', array(
            'id' => 4,
            'name' => 'Delivery Requested',
            'panel_class' => 'app\dashboard\panels\ExamplePanel',
            'options' => '{"jobStatus":"JobWorkflow\/requested","jobType":"deliver"}',
            'dashboard_id' => 1,
            'region' => 'column-2',
            'sort' => 0,
            'enabled' => 1,
            )
        );

        $this->insert('dashboard_panel', array(
            'id' => 5,
            'name' => 'Delivery Scheduled',
            'panel_class' => 'app\dashboard\panels\ExamplePanel',
            'options' => '{"jobStatus":"JobWorkflow\/scheduled","jobType":"deliver"}',
            'dashboard_id' => 1,
            'region' => 'column-2',
            'sort' => 1,
            'enabled' => 1,
            )
        );

    }

    public function down()
    {
        echo "m160409_033656_dashboard_panel_insert_data cannot be reverted.\n";

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
