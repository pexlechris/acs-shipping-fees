<?php

//In this file there is the hook that you can make optional the state field in checkout

add_filter( 'woocommerce_get_country_locale', function( $locale )
{
	//Make optional the state field for Greece only
	//$locale['GR']['state']['required'] = false;
	
	//Make optional the state field for all countries
	foreach($locale as $c_code=>$loc){
		$locale[$c_code]['state']['required'] = false;
	}
	return $locale;
} );

//Με Τράπεζα Πειραιώς δεν είναι συμβατή η αλλαγή των states!!
