<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Keymap extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $keymap = new FieldsBuilder('keymap');

        $keymap
            ->setLocation('post_type', '==', 'keymap');

        $keymap
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $keymap->build();
    }
}
