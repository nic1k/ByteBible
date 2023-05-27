<?php

namespace App\View\Composers;

use App\Main\Cheetsheet;
use App\Main\Keymap;
use Roots\Acorn\View\Composer;

class MainMenu extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.main-menu'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'main_categories' => $this->main_categories(),
            'cheetsheet' => $this->cheetsheet(),
            'keymap' => $this->keymap()
        ];
    }

    private function cheetsheet() : array
    {
        return Cheetsheet::getInstance()->getItemListMenu();
    }

    private function keymap() : array
    {
        return Keymap::getInstance()->getItemListMenu();
    }

    private function main_categories()
    {
        return get_field('main_categories','options') ? get_field('main_categories','options') : [];
    }
}
