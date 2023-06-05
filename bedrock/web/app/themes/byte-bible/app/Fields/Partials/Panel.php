<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Panel extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $panel = new FieldsBuilder('panel');

        $fieldChaptersArg = [
            'label' => 'Panel',
            'layout' => 'block'
        ];

        $fieldSection = [
            'label' => 'Section'
        ];

        $fieldCode = [
            'label' => "Section Code"
        ];

        $fieldHeading = [
            'label' => 'Heading'
        ];

        $fieldDescription = [
            'label' => "Description"
        ];

        $panel
            ->addImage('svg_icon')
            ->addRepeater('panel', $fieldChaptersArg)
                ->addText('heading', $fieldHeading)
                ->addRepeater('section', $fieldSection)
                    ->addTextarea('code', $fieldCode)
                    ->addText('description', $fieldDescription)
                ->endRepeater()
            ->endRepeater();

        return $panel;
    }
}
