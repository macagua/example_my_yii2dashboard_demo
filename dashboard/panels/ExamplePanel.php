<?php

namespace app\dashboard\panels;

/**
 * ExamplePanel implements the ExampleLayout class
 * for Example Dashboard.
 */
class ExamplePanel extends \cornernote\dashboard\Panel
{

    public $viewPath = '@app/views/dashboard/panels/example';

    public $jobStatus;
    public $jobType;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jobStatus', 'jobType'], 'required'],
        ];
    }

}