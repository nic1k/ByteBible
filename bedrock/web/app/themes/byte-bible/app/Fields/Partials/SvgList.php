<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SvgList extends Partial
{
    const SVG_LIST = [
        'home', 'speedmeter'
    ];

    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $svgList = new FieldsBuilder('svg_list');


        $svg_args = [
            'choices' => self::SVG_LIST,
        ];

        $svgList
            ->addSelect('svg',$svg_args);


        return $svgList;
    }
}
