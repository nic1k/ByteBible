<?php

namespace app\Setup;

class KeymapPostType extends CustomPostType{

    public function __construct()
    {
        parent::__construct();

        $this->post_type = 'keymap';

        $this->labels['name'] = _x( 'Keymap', 'Post Type General Name', 'text_domain' );
        $this->labels['singular_name'] = _x( 'Keymap', 'Post Type Singular Name', 'text_domain' );
        $this->labels['menu_name'] = __( 'Keymap', 'text_domain' );
        $this->labels['name_admin_bar'] = __( 'Keymap', 'text_domain' );

        $this->args['label'] = __( 'Keymap', 'text_domain' );
        $this->args['description'] = __( 'Keymap Description', 'text_domain' );
    }

}

