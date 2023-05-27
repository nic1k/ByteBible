<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class KeymapField extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $keymap = new FieldsBuilder('keymap');

        $fieldChaptersArg = [
            'label' => 'Chapters',
            'layout' => 'block'
        ];

        $fieldCheetsArg = [
            'label' => 'Key'
        ];
        $keymap
            ->setLocation('post_type', '==', 'keymap');

        $keymap
            ->addImage('svg_icon')
            ->addRepeater('chapters', $fieldChaptersArg)
                ->addText('heading')
            ->addRepeater('cheets', $fieldCheetsArg)
            ->addText('description')
            ->addTextarea('code')
            ->addGallery('image_list')
            ->endRepeater()
            ->endRepeater();

        return $keymap->build();
    }
}
