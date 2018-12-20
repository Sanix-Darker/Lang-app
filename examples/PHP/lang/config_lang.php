<?php 

	/**
	 * Author Sanix darker
	 * Configuration language
	 */
	// Check if a session has been set before or not
	if(!isset($_SESSION)){
		session_start();
	}

	// default lang
	$default_language = 'fr';

	// Create the session lang if it's not exist
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang'] = $default_language;
	}

	// Checking the parameter and if the file exist
	if(isset($_REQUEST['lang'])){
		// Verify and call the requested language
		verifLangBeforeCallit($_REQUEST['lang']);

		$_SESSION['lang'] = $_REQUEST['lang'];

	}else{
		// Default language
		verifLangBeforeCallit($_SESSION['lang']);
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

	/**
	 * [getCurrentLanguage This function return the current language fr, en, sp,...]
	 * @return [type] [description]
	 */
	function getCurrentLanguage(){

		global $default_language;
		return (isset($_SESSION['lang']) || isset($_REQUEST['lang'])) ? ((isset($_SESSION['lang']) && !isset($_REQUEST['lang'])) ? $_SESSION['lang'] : $_REQUEST['lang']) : $default_language;
	}

	/**
	 * [verifLangBeforeCallit This function verify if it's a valid language before set it as the current language]
	 * @param  [type] $langg [description]
	 * @return [type]        [description]
	 */
	function verifLangBeforeCallit($langg){
		global $default_language;
		
		(isset($langg) && file_exists('lang/'.$langg.'.php'))? include('lang/'.$langg.'.php'): include('lang/'.$default_language.'.php');

	}
?>