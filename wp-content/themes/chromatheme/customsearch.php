<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ba14a17bd188',
	'title' => 'Paramètres de base',
	'fields' => array(
		array(
			'key' => 'field_5ba14a259e756',
			'label' => 'Artiste',
			'name' => 'artiste',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
			'key' => 'field_5ba14a6c9e757',
			'label' => 'Date',
			'name' => 'date',
			'type' => 'date_picker',
			'instructions' => 'Pour une chronique : date de la sortie; Pour un LR/Entretien : date de l\'événement; Pour dossier : Remplir uniquement si nécessaire',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5ba14aa69e759',
			'label' => 'Site de l\'artiste',
			'name' => 'site_de_lartiste',
			'type' => 'url',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'http://stevenwilsonhq.com/sw/',
			'placeholder' => '',
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
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ba14ad5c28ff',
	'title' => 'Chronique',
	'fields' => array(
		array(
			'key' => 'field_5ba14bdeac412',
			'label' => 'Couverture',
			'name' => 'couverture',
			'type' => 'image',
			'instructions' => 'Une image CARREE ! Au moins 500x500',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'uploadedTo',
			'min_width' => 500,
			'min_height' => 500,
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5ba14ae9233d5',
			'label' => 'Support',
			'name' => 'support',
			'type' => 'checkbox',
			'instructions' => 'Cocher tous les supports disponibles',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'CD' => 'CD',
				'DVD' => 'DVD',
				'Vinyle' => 'Vinyle',
				'BluRay' => 'BluRay',
				'Livre' => 'Livre',
			),
			'allow_custom' => 0,
			'default_value' => array(
			),
			'layout' => 'vertical',
			'toggle' => 0,
			'return_format' => 'value',
			'save_custom' => 0,
		),
		array(
			'key' => 'field_5ba14b25233d6',
			'label' => 'Note',
			'name' => 'note',
			'type' => 'radio',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Coup de coeur' => 'Coup de coeur',
				'Mouton content' => 'Mouton content',
				'Mouton meh' => 'Mouton meh',
				'Mouton triste' => 'Mouton triste',
				'Coup de gueule' => 'Coup de gueule',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => 'Mouton meh',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5ba14b7b233d7',
			'label' => 'Label',
			'name' => 'label',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
			'key' => 'field_5ba14b8a233d8',
			'label' => 'Site label',
			'name' => 'site_label',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:chronique',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ba151e8ec47b',
	'title' => 'Live Report',
	'fields' => array(
		array(
			'key' => 'field_5ba1521b4425b',
			'label' => 'Première partie',
			'name' => 'premiere_partie',
			'type' => 'text',
			'instructions' => 'Nom de l\'artiste/groupe en première partie si présent',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
			'key' => 'field_5ba152554425d',
			'label' => 'Site première partie',
			'name' => 'site_premiere_partie',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ba1521b4425b',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5ba152374425c',
			'label' => 'Seconde partie',
			'name' => 'seconde_partie',
			'type' => 'text',
			'instructions' => 'Nom de l\'artiste/groupe en seconde partie si présent',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
			'key' => 'field_5ba152824425e',
			'label' => 'Site seconde partie',
			'name' => 'site_seconde_partie',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ba152374425c',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5ba153014425f',
			'label' => 'Ville',
			'name' => 'ville',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
			'key' => 'field_5ba1530e44260',
			'label' => 'Lieu',
			'name' => 'lieu',
			'type' => 'text',
			'instructions' => 'Nom de la salle si en salle; Nom du festival si festival; etc.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
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
			'key' => 'field_5ba1532c44261',
			'label' => 'Setlist',
			'name' => 'setlist',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:live-report',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ba154b299d6c',
	'title' => 'Photographe',
	'fields' => array(
		array(
			'key' => 'field_5ba1536244263',
			'label' => 'Lien photographe',
			'name' => 'lien_photographe',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ba1534a44262',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5ba1534a44262',
			'label' => 'Crédits photo',
			'name' => 'credits_photo',
			'type' => 'text',
			'instructions' => 'Nom du/de la photographe',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:entretien',
			),
		),
		array(
			array(
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:live-report',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif; ?>
