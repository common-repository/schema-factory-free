<?php
// WDAC controller class
class WDAC_CONTROLLER
{
	public function __construct()
	{
            add_action('wp_footer', array($this,'wdac_schema'));
	}

	public function wdac_schema()
	{
		$wdac_option = (array)json_decode(get_option('wdac_options')); 

		?>
		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@type": "LocalBusiness",

				"address": {
					"@type": "PostalAddress",
					"addressLocality": "<?php if(isset($wdac_option['wdac_city'])) echo str_replace('"','\"', stripslashes($wdac_option['wdac_city']));?>",
					"addressRegion": "<?php if(isset($wdac_option['wdac_state'])) echo str_replace('"','\"', stripslashes($wdac_option['wdac_state']));?>",
					"postalCode": "<?php if(isset($wdac_option['wdac_zip'])) echo str_replace('"','\"', stripslashes($wdac_option['wdac_zip']));?>",
					"streetAddress": "<?php if(isset($wdac_option['wdac_street_address'])) echo str_replace('"','\"', stripslashes($wdac_option['wdac_street_address']));?>"
				},
                "name": "<?php if(isset($wdac_option['wdac_business_name'])) echo str_replace('"','\"', stripslashes($wdac_option['wdac_business_name'])); ?>",
				"telephone": "<?php if(isset($wdac_option['wdac_business_phone_number']) && !empty($wdac_option['wdac_business_phone_number'])) { $wdac_mobile_char = substr($wdac_option['wdac_business_phone_number'], 0, 1); if($wdac_mobile_char[0]!='+') echo '+'.$wdac_option['wdac_business_phone_number']; else echo $wdac_option['wdac_business_phone_number']; }?>",
                
                "image" : "<?php echo $wdac_option['wdac_image']; ?>"  
                  
            }
		</script>
		<?php
	}	
}