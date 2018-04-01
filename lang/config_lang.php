<?php 

	/**
	 * Configuration language
	 */
	session_start();

	// default lang
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang'] = 'fr';
	}

	if(isset($_REQUEST['lang'])){

		// Checking if the file exist
		if(file_exists('lang/'.$_REQUEST['lang'].'.php')){
		
			include('lang/'.$_REQUEST['lang'].'.php');
		
			$_SESSION['lang'] = $_REQUEST['lang'];

		}else{
			include('lang/'.$_SESSION['lang'].'.php');
		}

		//header('Location: '.$_SERVER['HTTP_REFERER']);
	}else{
			// Default language
		
		include('lang/'.$_SESSION['lang'].'.php');
	}

?>