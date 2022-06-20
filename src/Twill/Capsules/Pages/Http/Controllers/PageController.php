<?php

namespace HelloWorld\Twill\Capsules\Pages\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;

class PageController extends BaseModuleController
{
    protected $moduleName = 'pages';

    protected $indexOptions = [
        'reorder' => true,
    ];

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;
}
