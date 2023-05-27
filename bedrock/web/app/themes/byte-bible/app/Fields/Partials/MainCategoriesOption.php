<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class MainCategoriesOption extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $mainCategoriesOption = new FieldsBuilder('main_categories_option');

        $mainCategoriesOption
            ->addRepeater('main_categories')
                ->addImage('svg')
                ->addText('content_type')
            ->endRepeater();

        return $mainCategoriesOption;
    }
}
