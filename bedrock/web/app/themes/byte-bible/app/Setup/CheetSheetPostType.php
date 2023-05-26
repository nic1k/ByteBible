<?php

namespace App\Setup;

class CheetSheetPostType extends CustomPostType{

    public function __construct()
    {
        parent::__construct();

        $this->post_type = 'cheetsheet';

        $this->labels['name'] = _x( 'CheetSheet', 'Post Type General Name', 'text_domain' );
        $this->labels['singular_name'] = _x( 'CheetSheet', 'Post Type Singular Name', 'text_domain' );
        $this->labels['menu_name'] = __( 'CheetSheet', 'text_domain' );
        $this->labels['name_admin_bar'] = __( 'CheetSheet', 'text_domain' );

        $this->args['label'] = __( 'CheetSheet', 'text_domain' );
        $this->args['description'] = __( 'CheetSheet Description', 'text_domain' );
    }
}

