<?php

namespace HelloWorld\Twill\Capsules\Pages\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleNesting;
use A17\Twill\Repositories\ModuleRepository;
use HelloWorld\Twill\Capsules\Pages\Models\Page;

class PageRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions, HandleNesting;

    public function __construct(Page $model)
    {
        $this->model = $model;
    }
}
