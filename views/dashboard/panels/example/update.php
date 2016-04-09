<?php
/**
 * @var $panel \app\dashboard\panels\ExamplePanel
 * @var $this \yii\web\View
 */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?= $panel->dashboardPanel->name ?>
            <div class="pull-right">
                <?= $this->render('@cornernote/dashboard/views/dashboard/panels/_buttons', ['panel' => $panel]) ?>
            </div>
        </h3>
    </div>
    <div class="panel-body">
        <?php \yii\helpers\VarDumper::dump($panel->dashboardPanel->options); ?>
    </div>
</div>