<?php


class cb_p9_sidebar_user_widget extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above */
    function cb_p9_sidebar_user_widget() {
		global $cb_p9;
		
		// Load language from db
		$cb_p9->lang = $cb_p9->load_language();
		
        parent::__construct(false, $name = $cb_p9->lang['sidebar_user_widget_name']);	
		
		
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) {	
	
		
		global $cb_p9;
        extract( $args );
        $title 		= apply_filters('widget_title', $instance['title']);
		
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
							
								<?php 
									
								
								?>
									<div class="cb_p9_sidebar_user_widget_content">
									
									
										<button onclick="window.location.href='<?php echo get_permalink($cb_p9->opt['pages']['support_desk_page']) ?>';"><?php echo $cb_p9->lang['sidebar_user_widget_help_desk_button_label'] ?></button>
										

										
									
									</div>
								
								<?php 
									
								?>
							
     
						
              <?php echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['message'] = strip_tags($new_instance['message']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
		global $cb_p9;
		$instance = wp_parse_args( (array) $instance, array( 'title' => $cb_p9->lang['sidebar_user_widget_title'] ) );
        $title 		= esc_attr($instance['title']);
        ?>
         <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>	
		
        <?php 
    }
	


}



function cb_p9_register_widgets()
{

	register_widget( 'cb_p9_sidebar_user_widget' );


}

add_action('widgets_init', 'cb_p9_register_widgets');


?>