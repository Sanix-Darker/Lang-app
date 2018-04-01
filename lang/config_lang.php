<?php 

	/**
	 * Configuration language
	 */
	session_start();

	// default lang
	$default_language = 'fr';


	// Create the session lang if it's not exist
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang'] = $default_language;
	}

	// Checking the parameter and if the file exist
	if(isset($_REQUEST['lang']) && file_exists('lang/'.$_REQUEST['lang'].'.php')){

		include('lang/'.$_REQUEST['lang'].'.php');
	
		$_SESSION['lang'] = $_REQUEST['lang'];

		//header('Location: '.$_SERVER['HTTP_REFERER']);
	}else{
		// Default language
		
		include('lang/'.$_SESSION['lang'].'.php');
	}

	/**
	 * [ifIsCurrentlangOrNot description]
	 * @param  [type] $lang [The lang parameter in the select]
	 * @return [type]       [description]
	 * Just to check the current language selected
	 */
	function ifIsCurrentlangOrNot($lang){
		return ((isset($_REQUEST['lang']) && $_REQUEST['lang']==$lang) || (isset($_SESSION['lang']) && $_SESSION['lang']==$lang))? true : false ;
	}

?>