<?php

namespace app\View\Components;

use Illuminate\View\Component;

class MainMenu extends Component
{

    public $cheetsheet=[];
    public $main_categories = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $args = [
          'post_type' => 'cheetsheet'
        ];
        $this->cheetsheet = get_posts($args);

        $this->main_categories = [
            'cheetsheet',
            'keymap'
        ];

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-menu');
    }
}
