<?php


$this->opt = array_replace_recursive(

	$this->opt,

	array(
	
		'test_option' => 5,

			'quickstart'=> array(

				'site_account' => 'Delete this and enter your Site or your personal (admin) Patreon account here',
				'redirect_url'=>'',	
				'site_support_message'=>'Support {sitename} on Patreon!',	
				'force_site_button'=>'no',
			),
				
			'post_button'=> array(
							
				'show_button_under_posts'=>'yes',	
				'append_to_content_order'=>'99',	
				'show_message_over_post_button'=>'yes',
				'message_over_post_button_font_size'=>'24px',	
				'insert_text_align'=>'center',	
				'insert_margin'=>'15px',
				'message_over_post_button'=>'Liked it? Take a second to support {authorname} on Patreon!',
				'message_over_post_button_margin'=>'10px',
				'button_margin'=>'10px',
			),
			'sidebar_widgets'=> array(
					
				'insert_text_align'=>'center',	
				'message_font_size'=>'18px',	
				'message_over_post_button_margin'=>'10px',
				'button_margin'=>'10px',
			),
			'extras'=> array(

			),
			'support'=> array(
				
					
			),
			'forums_to_staff'=> array(
			
				
					
					
			),
	
			'roles'=>array(
				
				'support_admin' => array(
					'color' => '#ff0000', 
					'caps' => array(
						'close_topic', 
						'edit_staff', 
						'open_topic', 
						'reopen_topic', 
						'assign_topic', 
						'post_topic', 
						'edit_forum', 
						'view_forum', 
						'post_topic', 
						'view_staff'
						)
						
				),
			
				'support_staff' => array(
					'color' => '#6F6F6F', 
					'caps' => array(
						'close_topic',
						'open_topic',
						'reopen_topic',
						'post_topic',
						'view_topic'
						)
				),
		
			),
			
			'template'=> 'default',
			'assign_topics_to_admins'=> 'yes',
			'send_topic_update_email_notification_to_users'=> 'yes',
			'send_topic_update_email_notification_to_staff'=> 'yes',
		)
		
		

);


?>