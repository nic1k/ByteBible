<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ThemeOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Options | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeOptions = new FieldsBuilder('theme_options');

        $themeOptions
            ->addRepeater('main_categories')
                ->addText('content_type')
                ->addText('svg_icon')
            ->endRepeater();

        return $themeOptions->build();
    }
}

