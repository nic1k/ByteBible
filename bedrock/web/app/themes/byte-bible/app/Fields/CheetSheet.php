<?php

namespace app\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldNameCollisionException;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CheetSheet extends Field
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
            'label' => 'Chapters',
            'layout' => 'block'
        ];

        $fieldCheetsArg = [
            'label' => 'Cheets'
        ];

        $cheetSheet = new FieldsBuilder('cheet_sheet');

        $cheetSheet
            ->setLocation('post_type', '==', 'cheetsheet');

        $cheetSheet
            ->addRepeater('chapters', $fieldChaptersArg)
                ->addText('heading')
                ->addRepeater('cheets', $fieldCheetsArg)
                    ->addText('description')
                    ->addTextarea('code')
                ->endRepeater()
            ->endRepeater();

        return $cheetSheet->build();
    }
}
