<?php

namespace App\View\Composers;

use App\Main\Cheetsheet;
use Roots\Acorn\View\Composer;

class CheetsheetContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.content.cheetsheet'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'content' => $this->getContentPanel()
        ];
    }

    private function getContentPanel(){
        return Cheetsheet::getInstance()->getContentPanels();
    }
}
