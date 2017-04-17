<?php


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_58d9595d5d72e',
	'title' => 'BYU Header',
	'fields' => array (
		array (
			'key' => 'field_58d95135651d8',
			'label' => 'BYU Site Title',
			'name' => 'site_title',
			'type' => 'text',
			'instructions' => 'This field will populate the site title across all pages in the top BYU ribbon.
(ie. The title in the top left, after BYU.)',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Site Name',
			'placeholder' => 'Type here',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_58d95e87eb1de',
			'label' => 'Display BYU Header Menu',
			'name' => 'display_byu_header_menu',
			'type' => 'true_false',
			'instructions' => 'Check this box if you would like a sub-navigation menu within the header, under the BYU ribbon.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Display Menu',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array (
			'key' => 'field_58d95f0f56ae9',
			'label' => 'BYU Header Menu',
			'name' => 'byu_header_menu',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58d95e87eb1de',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'button_label' => 'Add Menu Item',
			'min' => 1,
			'max' => 16,
			'layouts' => array (
				array (
					'key' => '58d95f1f8f3a4',
					'name' => 'menu_link',
					'label' => 'Menu Link',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_58d961a022a15',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
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
						array (
							'key' => 'field_58e7c29c6e603',
							'label' => 'Type',
							'name' => 'type',
							'type' => 'radio',
							'instructions' => 'Select the type of link',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'internal' => 'Internal',
								'external' => 'External',
							),
							'allow_null' => 0,
							'other_choice' => 0,
							'save_other_choice' => 0,
							'default_value' => 'Internal',
							'layout' => 'vertical',
							'return_format' => 'value',
						),
						array (
							'key' => 'field_58d961b022a16',
							'label' => 'Url',
							'name' => 'url',
							'type' => 'url',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_58e7c29c6e603',
										'operator' => '==',
										'value' => 'external',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
						),
						array (
							'key' => 'field_58e7c36c44e33',
							'label' => 'Relative Url',
							'name' => 'relative_url',
							'type' => 'text',
							'instructions' => 'Include only the part of the url that comes after the domain name.<br>
ie. if you want to link to the root of the site just enter "/" as the link.',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_58e7c29c6e603',
										'operator' => '==',
										'value' => 'internal',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '/',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'site_options',
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

acf_add_local_field_group(array (
	'key' => 'group_58d9847db835f',
	'title' => 'BYU Footer',
	'fields' => array (
		array (
			'key' => 'field_58d984a127ca3',
			'label' => 'BYU Footer Navigation',
			'name' => 'byu_footer_navigation',
			'type' => 'true_false',
			'instructions' => 'Check this box if you would like additional links to appear in your footer about the BYU footer ribbon.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array (
			'key' => 'field_58d9851e27ca4',
			'label' => 'BYU Footer Columns',
			'name' => 'byu_footer_columns',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58d984a127ca3',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'button_label' => 'Add Column',
			'min' => 1,
			'max' => 4,
			'layouts' => array (
				array (
					'key' => '58d9852b85215',
					'name' => 'column_content',
					'label' => 'Column Content',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_58d988174a5f1',
							'label' => 'Column Header',
							'name' => 'column_header',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
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
						array (
							'key' => 'field_58dbfaf411355',
							'label' => 'Column Rows',
							'name' => 'column_rows',
							'type' => 'flexible_content',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'button_label' => 'Add Row',
							'min' => '',
							'max' => '',
							'layouts' => array (
								array (
									'key' => '58dbfb05f319d',
									'name' => 'social_media',
									'label' => 'Social Media',
									'display' => 'block',
									'sub_fields' => array (
										array (
											'key' => 'field_58d9862f27caa',
											'label' => 'Social Media Links',
											'name' => 'social_media_links',
											'type' => 'flexible_content',
											'instructions' => 'Select the social media icons you would like to include',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'button_label' => 'Add Social Icon',
											'min' => 1,
											'max' => '',
											'layouts' => array (
												array (
													'key' => '58d9864ab767d',
													'name' => 'instagram',
													'label' => 'Instagram',
													'display' => 'block',
													'sub_fields' => array (
														array (
															'key' => 'field_58d9865427cab',
															'label' => 'url',
															'name' => 'url',
															'type' => 'url',
															'instructions' => '',
															'required' => 0,
															'conditional_logic' => 0,
															'wrapper' => array (
																'width' => '',
																'class' => '',
																'id' => '',
															),
															'default_value' => '',
															'placeholder' => '',
														),
													),
													'min' => '',
													'max' => '1',
												),
												array (
													'key' => '58dbfb9ff5ffb',
													'name' => 'twitter',
													'label' => 'Twitter',
													'display' => 'block',
													'sub_fields' => array (
														array (
															'key' => 'field_58d9866027cac',
															'label' => 'url',
															'name' => 'url',
															'type' => 'url',
															'instructions' => '',
															'required' => 0,
															'conditional_logic' => 0,
															'wrapper' => array (
																'width' => '',
																'class' => '',
																'id' => '',
															),
															'default_value' => '',
															'placeholder' => '',
														),
													),
													'min' => '',
													'max' => '1',
												),
												array (
													'key' => '58dbfbc1f5ffc',
													'name' => 'facebook',
													'label' => 'Facebook',
													'display' => 'block',
													'sub_fields' => array (
														array (
															'key' => 'field_58d9866927cad',
															'label' => 'url',
															'name' => 'url',
															'type' => 'url',
															'instructions' => '',
															'required' => 0,
															'conditional_logic' => 0,
															'wrapper' => array (
																'width' => '',
																'class' => '',
																'id' => '',
															),
															'default_value' => '',
															'placeholder' => '',
														),
													),
													'min' => '',
													'max' => '1',
												),
												array (
													'key' => '58dbfbdaf5ffd',
													'name' => 'youtube',
													'label' => 'Youtube',
													'display' => 'block',
													'sub_fields' => array (
														array (
															'key' => 'field_58d9868e27caf',
															'label' => 'url',
															'name' => 'url',
															'type' => 'url',
															'instructions' => '',
															'required' => 0,
															'conditional_logic' => 0,
															'wrapper' => array (
																'width' => '',
																'class' => '',
																'id' => '',
															),
															'default_value' => '',
															'placeholder' => '',
														),
													),
													'min' => '',
													'max' => '1',
												),
												array (
													'key' => '58dbfbf5f5ffe',
													'name' => 'google_plus',
													'label' => 'Google Plus',
													'display' => 'block',
													'sub_fields' => array (
														array (
															'key' => 'field_58d9867b27cae',
															'label' => 'url',
															'name' => 'url',
															'type' => 'url',
															'instructions' => '',
															'required' => 0,
															'conditional_logic' => 0,
															'wrapper' => array (
																'width' => '',
																'class' => '',
																'id' => '',
															),
															'default_value' => '',
															'placeholder' => '',
														),
													),
													'min' => '',
													'max' => '1',
												),
												array (
													'key' => '58e2bf191cee1',
													'name' => 'linkedin',
													'label' => 'LinkedIn',
													'display' => 'block',
													'sub_fields' => array (
														array (
															'key' => 'field_58e2bf191cee2',
															'label' => 'url',
															'name' => 'url',
															'type' => 'url',
															'instructions' => '',
															'required' => 0,
															'conditional_logic' => 0,
															'wrapper' => array (
																'width' => '',
																'class' => '',
																'id' => '',
															),
															'default_value' => '',
															'placeholder' => '',
														),
													),
													'min' => '',
													'max' => '1',
												),
											),
										),
									),
									'min' => '',
									'max' => '',
								),
								array (
									'key' => '58dbfb1711356',
									'name' => 'action_button',
									'label' => 'Action Button',
									'display' => 'block',
									'sub_fields' => array (
										array (
											'key' => 'field_58dc05f52327e',
											'label' => 'Button Label',
											'name' => 'button_label',
											'type' => 'text',
											'instructions' => '',
											'required' => 1,
											'conditional_logic' => 0,
											'wrapper' => array (
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
										array (
											'key' => 'field_58e7e70a04fe7',
											'label' => 'Type',
											'name' => 'type',
											'type' => 'radio',
											'instructions' => 'Select the type of link',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'choices' => array (
												'internal' => 'Internal',
												'external' => 'External',
											),
											'allow_null' => 0,
											'other_choice' => 0,
											'save_other_choice' => 0,
											'default_value' => 'Internal',
											'layout' => 'vertical',
											'return_format' => 'value',
										),
										array (
											'key' => 'field_58e7e71904fe8',
											'label' => 'Url',
											'name' => 'url',
											'type' => 'url',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => array (
												array (
													array (
														'field' => 'field_58e7e70a04fe7',
														'operator' => '==',
														'value' => 'external',
													),
												),
											),
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'placeholder' => '',
										),
										array (
											'key' => 'field_58e7e73204fe9',
											'label' => 'Relative Url',
											'name' => 'relative_url',
											'type' => 'text',
											'instructions' => 'Include only the part of the url that comes after the domain name.<br>
ie. if you want to link to the root of the site just enter "/" as the link.',
											'required' => 0,
											'conditional_logic' => array (
												array (
													array (
														'field' => 'field_58e7e70a04fe7',
														'operator' => '==',
														'value' => 'internal',
													),
												),
											),
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '/',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'maxlength' => '',
										),
									),
									'min' => '',
									'max' => '',
								),
								array (
									'key' => '58dbfb2f11357',
									'name' => 'link',
									'label' => 'Link',
									'display' => 'block',
									'sub_fields' => array (
										array (
											'key' => 'field_58dc068e2327f',
											'label' => 'Text',
											'name' => 'text',
											'type' => 'text',
											'instructions' => '',
											'required' => 1,
											'conditional_logic' => 0,
											'wrapper' => array (
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
										array (
											'key' => 'field_58e7e240c8b08',
											'label' => 'Type',
											'name' => 'type',
											'type' => 'radio',
											'instructions' => 'Select the type of link',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'choices' => array (
												'internal' => 'Internal',
												'external' => 'External',
											),
											'allow_null' => 0,
											'other_choice' => 0,
											'save_other_choice' => 0,
											'default_value' => 'Internal',
											'layout' => 'vertical',
											'return_format' => 'value',
										),
										array (
											'key' => 'field_58e7e295c8b09',
											'label' => 'Url',
											'name' => 'url',
											'type' => 'url',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => array (
												array (
													array (
														'field' => 'field_58e7e240c8b08',
														'operator' => '==',
														'value' => 'external',
													),
												),
											),
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'placeholder' => '',
										),
										array (
											'key' => 'field_58e7e2bdc8b0a',
											'label' => 'Relative Url',
											'name' => 'relative_url',
											'type' => 'text',
											'instructions' => 'Include only the part of the url that comes after the domain name.<br>
ie. if you want to link to the root of the site just enter "/" as the link.',
											'required' => 0,
											'conditional_logic' => array (
												array (
													array (
														'field' => 'field_58e7e240c8b08',
														'operator' => '==',
														'value' => 'internal',
													),
												),
											),
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '/',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'maxlength' => '',
										),
									),
									'min' => '',
									'max' => '',
								),
								array (
									'key' => '58dc0aa3a4075',
									'name' => 'info_text',
									'label' => 'Info Text',
									'display' => 'block',
									'sub_fields' => array (
										array (
											'key' => 'field_58dc0aaca4076',
											'label' => 'Text',
											'name' => 'text',
											'type' => 'textarea',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'placeholder' => '',
											'maxlength' => '',
											'rows' => '',
											'new_lines' => 'br',
										),
									),
									'min' => '',
									'max' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'site_options',
			),
		),
	),
	'menu_order' => 5,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;