<?php
Class WDAC_ADMIN_CONTROLLER
{
	public $admin_view;
	public function __construct(){
		$this->admin_view = new WDAC_ADMIN_VIEW();
		add_action( 'admin_menu', array($this,'WDAC_admin_menu') );
		add_action( 'admin_footer', array($this,'WDAC_admin_scripts') );
	}
    
	public function WDAC_admin_scripts(){		
        wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-1.12.4.min.js');
        wp_enqueue_script('validate-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js');
        wp_enqueue_script('wdac-js',  WDAC_PLUGIN_URL.'assets/js/wdac.js' );
        wp_enqueue_style('style-css',  WDAC_PLUGIN_URL.'assets/css/style.css' );
	} 
    
	public function WDAC_admin_menu(){
		add_menu_page('Schema Factory Free', 'Schema Factory', 'manage_options', 'wdac-settings',array($this,'wdac_setting_page'), 'dashicons-building');
	}
    
	public function wdac_setting_page(){
		if(isset($_POST['btnsubmit']))
		{
			$wdac_form_data = $_POST;
            
            if ( ! function_exists( 'wp_handle_upload' ) ) {
			    require_once( ABSPATH . 'wp-admin/includes/file.php' );
			}
            
            if(!empty($_FILES['wdac_image']['name'])){
                $uploadedfile = $_FILES['wdac_image'];
                $upload_overrides = array( 'test_form' => false );
                $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

				if ( $movefile && ! isset( $movefile['error'] ) ) {
						$wdac_form_data['wdac_image'] = $movefile['url'];
				} 
			}
			else{
				$wdac_form_data['wdac_image'] = $_POST['wdac_exist_image'];
			}
            
            // clean the phone number 
			if(isset($_POST['wdac_business_phone_number'])) {
                $wdac_form_data['wdac_business_phone_number'] = preg_replace('/[^0-9]/', '', $_POST['wdac_business_phone_number']);
			}
			update_option('wdac_options',json_encode($wdac_form_data));
		}

		echo $this->admin_view->wdac_setting_page();
	}
}