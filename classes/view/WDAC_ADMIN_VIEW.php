<?php
Class WDAC_ADMIN_VIEW
{
	public function __construct()
	{
		
	}

	public function wdac_setting_page()
	{
		include(WDAC_PLUGIN_PATH.'/template/wdac-setting.php');
	}
}