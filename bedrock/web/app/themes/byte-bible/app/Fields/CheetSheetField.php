<?php

namespace App\Fields;
use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldNameCollisionException;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CheetSheetField extends Field
{
    /**
     * The field group.
     *
     * @return array
     * @throws FieldNameCollisionException
     */
    public function fields()
    {

        $fieldChaptersArg = [
            'label' => 'Panel',
            'layout' => 'block'
        ];

        $fieldCheetsArg = [
            'label' => 'Cheets'
        ];

        $cheetSheet = new FieldsBuilder('cheet_sheet');

        $cheetSheet
            ->setLocation('post_type', '==', 'cheetsheet');




        $cheetSheet
            ->addImage('svg_icon')
            ->addRepeater('panel', $fieldChaptersArg)
                ->addText('heading')
                ->addRepeater('section', $fieldCheetsArg)
                    ->addText('description')
                    ->addTextarea('code')
                    ->addGallery('image_list')
                ->endRepeater()
            ->endRepeater();

        return $cheetSheet->build();
    }
}
