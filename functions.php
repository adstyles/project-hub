<?

if (function_exists('add_image_size')) { 
	add_image_size('thumb', 400, 400);
	add_image_size('gallery', 500, 2000);
}

add_theme_support('post-thumbnails');

define('DISALLOW_FILE_EDIT', true);


function remove_menu_items() {
	remove_menu_page('edit-comments.php');
}

add_action( 'admin_menu', 'remove_menu_items' );

function my_acf_admin_head() {
    ?>
    <style type="text/css">

    /* .acf-row:nth-child(odd) {
		background:blue;
	} */

	/* .acf-actions {display:none;} */

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><input name="post_password" id="' . $label . '" type="text" size="25" maxlength="25" placeholder="Password" spellcheck="false" /></form>';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c508e2e04aff',
	'title' => 'Project',
	'fields' => array(
		array(
			'key' => 'field_5c508e49e2f28',
			'label' => 'Updates',
			'name' => 'updates',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Update',
			'sub_fields' => array(
				array(
					'key' => 'field_5c5095cfe6f69',
					'label' => 'Type',
					'name' => 'type',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'prototype' => 'Prototype',
						'production' => 'Production',
						'pdf' => 'PDF',
						'video' => 'Video',
						'note' => 'Note',
					),
					'default_value' => array(
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5c509f13f76bb',
					'label' => 'Device',
					'name' => 'device',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'all' => 'All Devices',
						'not-mobile' => 'Desktop Only',
						'not-desktop' => 'Mobile Only',
					),
					'default_value' => array(
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5c50962fe6f6a',
					'label' => 'Status',
					'name' => 'status',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'Current' => 'Current',
						'Pinned' => 'Pinned',
						'Archived' => 'Archived',
					),
					'default_value' => array(
						0 => 'Current',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5c50a06292661',
					'label' => 'Date',
					'name' => 'date',
					'type' => 'date_time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'd/m/Y g:i a',
					'return_format' => 'd/m/Y g:i a',
					'first_day' => 1,
				),
				array(
					'key' => 'field_5c509d596a38b',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5c509d646a38c',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'http://projects.dow-smith.com/',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5c509d7e6a38d',
					'label' => 'Notes',
					'name' => 'notes',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '100',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 4,
					'new_lines' => 'wpautop',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
		4 => 'revisions',
		5 => 'slug',
		6 => 'author',
		7 => 'format',
		8 => 'page_attributes',
		9 => 'featured_image',
		10 => 'categories',
		11 => 'tags',
		12 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;


?>