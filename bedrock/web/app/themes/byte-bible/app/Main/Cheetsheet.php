<?php

namespace App\Main;

class Cheetsheet extends Singleton
{

    private $post;
    private $svg_icon;
    private const KEYMAP_ARGS = [
        'post_type' => 'cheetsheet'
    ];
    protected function __construct()
    {
        $this->post = get_posts(self::KEYMAP_ARGS);
        $this->svg_icon = '<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>';
    }

    public function getItemListMenu(){
        $post_list_for_menu = [];
        foreach ($this->post as $post) {
            $temp_post['post_title'] = $post->post_title;
            $temp_post['permalink'] = get_permalink($post->ID);
            $temp_post['svg_icon'] = get_field('svg_icon', $post->ID) ? get_field('svg_icon', $post->ID)['url'] : "";
            $post_list_for_menu[] = $temp_post;
        }
        return $post_list_for_menu;
    }

    public function getContentPanels(){
        $panel_list = [];
        $post = get_post();
        $fields = get_field('panel', $post->ID);

        return $fields ? $fields : [];
    }

}
