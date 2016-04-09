<?php
/**
 * @var $layout \app\dashboard\layouts\ExampleLayout
 * @var $this \yii\web\View
 */

$regionPanels = $layout->regionPanels($layout->dashboard->getDashboardPanels()->enabled()->all());
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">
            <?= $layout->dashboard->name ?>
            <div class="pull-right">
                <?= $this->render('@cornernote/dashboard/views/dashboard/layouts/_buttons', ['layout' => $layout]) ?>
            </div>
        </h2>
    </div>
    <div class="panel-body">
        <?php
        echo '<div class="row">';
        foreach ($regionPanels as $region => $items) {
            echo '<div class="col-md-6">';
            foreach ($items as $item) {
                echo \yii\helpers\Html::tag('div', $item['content'], $item['options']);
            }
            echo '</div>';
        }
        echo '</div>';
        ?>
    </div>
</div>