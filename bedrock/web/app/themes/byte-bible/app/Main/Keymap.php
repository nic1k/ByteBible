<?php

namespace App\Main;

class Keymap extends Singleton
{

    private $post;

    private const KEYMAP_ARGS = [
        'post_type' => 'keymap'
    ];
    protected function __construct()
    {
        $this->post = get_posts(self::KEYMAP_ARGS);
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

}
