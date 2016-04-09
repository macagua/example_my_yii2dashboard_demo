<?php

namespace app\dashboard\layouts;

use \cornernote\dashboard\Layout;

/**
 * ExampleLayout implements the default layout
 * for Example Dashboard.
 */
class ExampleLayout extends Layout
{

    public $viewPath = '@app/views/dashboard/layouts/example';

    public $customSetting;
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

    /**
     * @inheritdoc
     */
    public function getRegions()
    {
        return [
            'column-1' => 'Column 1',
            'column-2' => 'Column 2',
        ];
    }

}