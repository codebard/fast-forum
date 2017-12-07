<?php

$this->internal = array_replace_recursive(
	
	
	$this->internal,
	
	array(
		
		'id' => 'cb_p9',
		'plugin_id' => 'codebard-help-desk',
		'prefix' => 'cb_p9_',
		'version' => '1.0.4',
		'plugin_name' => 'CodeBard Help Desk',
		
		'callable_from_request' => array(
			'get_topics' => 1,
			'get_topic' => 1,
			'topic_forum_form' => 1,
			'topic_form' => 1,
			'open_topic' => 1,
			'create_topic' => 1,
			'list_topics' => 1,
			'list_agent_assigned_topics' => 1,
			'save_settings' => 1,
			'add_modify_forum' => 1,
			'edit_forum' => 1,
			'delete_forum' => 1,
			'remove_staff_from_forum' => 1,
			'add_staff_to_forum' => 1,
			'reset_languages' => 1,
			'save_language' => 1,
			'choose_language' => 1,
			'serve_attachment' => 1,
			'close_topic' => 1,
			'reopen_topic' => 1,
			'reassign_topic' => 1,
			'reassign_topic_confirm' => 1,
			'change_topic_forum' => 1,
			'change_topic_forum_confirm' => 1,
			'change_topic_forum' => 1,
			'save_license' => 1,
			'delete_this_topic' => 1,
			'list_resolved_topics' => 1,
			'list_agent_assigned_resolved_topics' => 1,
			'dismiss_admin_notice' => 1,
			'list_all_topics_admin' => 1,
			'insert_quick_post' => 1,
			'list_all_resolved_topics_admin' => 1,
			'ignore the ones after this line they were allowed for development!'=>1,
			
		),
			
		
		'do_log' => false,
		
		'calllimits' => array(
		
			'add_admin_menu'=>1,
		),		
		
		'callcount' => array(
		
		),		
		
		'tables'=> array(

			'forum' => '',
			'post' => '',
			'attachment' => '',

		),	
		'data'=> array(

			'forum' => array(
				'tables' => array(
					'forum' => 'forum',
				),
			
			),
			'post' => array(
				'tables' => array(
					'post' => 'post',
				),
			),
			'attachment' => array(
				'tables' => array(
					'attachment' => 'attachment',
				),
			),

		),	
		

		'meta_tables'=> array(

			'int' => array(
						'type'=>'bigint',
						'length' => '22',
						'default' => '0',
						'structure'=>'',
						),
						
			'text' => array(
						'type'=>'varchar',
						'length' =>'255',
						'default' => 'NULL',
						'structure'=>'',
						),		
						
			'date' => array(
						'type'=>'datetime',
						'length' =>'',
						'structure'=>'',
						),
						
			'decimal' => array(
						'type'=>'decimal',
						'length' =>'26,6',
						'structure'=>'',
						),
								
			'longtext' => array(
						'type'=>'longtext',
						'length' =>'',
						'structure'=>'',
						),
						
		),	
		
		
		'topic_statuses' => array(
		
			'open' => 'topic_status_open',
			'closed' => 'topic_status_closed',
			
		
		),
		
		
		'roles'=> array(
		
				'support_admin' => array(
							
											'label' =>'Support Admin', 
											
											'color' =>'#ff0000', 
											
											'capabilities'  => array(
											
																'close_topic', 
																'open_topic', 
																'reopen_topic',  
																'post_topic', 
																'view_topic',
																
																'assign_topic',
																'view_staff',
																'edit_staff' 
															)
										),
				
				'support_staff' => array(
				
											'label' => 'Support Staff', 
											
											'color' => '#6F6F6F', 
											
											'capabilities'  => array(
											
																'close_topic',  
																'open_topic', 
																'reopen_topic',  
																'post_topic', 
																'view_topic'
															)
										),
					
				
		),
		
		
		'admin_tabs' => array(
		
			'dashboard'=>array(
				
			),
			'general'=>array(
				
				
			),
			'forums'=>array(
				
				
			),
			'staff'=>array(
				
				
			),
			'languages'=>array(
				
				
			),
			'addons'=>array(
				
				
				
			),
			'extras'=>array(
				
			
				
			),
			'support'=>array(
				
				
			),
		
		
		
		),
		
		'addons' => array(
		
			'woocommerce_integration' => array(
			
				'title' => '',
				'icon' => 'woocommerce_integration.jpg',		
				'link' => 'https://codebard.com/codebard-help-desk-woocommerce-integration',		
				'slug' => 'codebard-help-desk-woocommerce-integration/index.php',		
				'class_name' => 'cb_p9_a1',		
			
			),
		
		
		
		
		),
	
	)
	
);


?>