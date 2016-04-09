<?php
/**
 * @var $panel \app\dashboard\panels\ExamplePanel
 * @var $this \yii\web\View
 * @var $form \yii\bootstrap\ActiveForm
 */
?>

<?= $form->field($panel, 'jobType')->
	dropdownList(
		['collect' => 'collect', 'deliver' => 'deliver']
		//['prompt' => '---Select a Job type---']
	)
?>
<?= $form->field($panel, 'jobStatus')->
	dropdownList([
		'JobWorkflow/requested' => 'Requested',
		'JobWorkflow/scheduled' => 'Scheduled',
		'JobWorkflow/collected' => 'Collected'
		]
		//['prompt' => '---Select a Job status---']
	)
?>
