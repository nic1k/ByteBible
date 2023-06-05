<?php

namespace App\Fields;

use App\Fields\Partials\Panel;
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

        $keymap
            ->setLocation('post_type', '==', 'keymap');

        $keymap
            ->addFields($this->get(Panel::class));

        return $keymap->build();
    }
}
