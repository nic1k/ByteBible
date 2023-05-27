<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SvgOption extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $svgOption = new FieldsBuilder('svg_option');

        $svgOption
            ->addRepeater('svg_repeater')
                ->addImage('svg')
                ->addText('slug')
            ->endRepeater();

        return $svgOption;
    }
}
