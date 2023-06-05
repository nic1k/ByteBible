<?php

namespace App\Fields;
use App\Fields\Partials\Panel;
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

        $cheetSheet = new FieldsBuilder('cheet_sheet');

        $cheetSheet
            ->setLocation('post_type', '==', 'cheetsheet');

        $cheetSheet
            ->addFields($this->get(Panel::class));

        return $cheetSheet->build();
    }
}
