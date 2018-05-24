<?
	/* 
	* Copyright (c) 2018 José Javier Fernández 
	* changelog
	- 1.0.0 primera version con las funciones minimas
	
	libreria de funciones que comprueba si un valor cumple el criterio acorde a los tipos de la libreria de javascript verify.notify.js
	
	*/
	function vnj_email($valor){
		$re = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i';
		return preg_match($re, $valor);
	}
	function vnj_url($valor){
		$re = '/^https?:\/\/[\-A-Za-z0-9+&@#\/%?=~_|!:,.;]*[\-A-Za-z0-9+&@#\/%=~_|]/';
		return preg_match($re, $valor);
	}
	function vnj_sinsimbolos($valor){
		$re = '/^[0-9A-Za-z\\n ]+$/';
		return preg_match($re, $valor);
	}
	function vnj_texto($valor){
		$re = '/^[0-9A-Za-z ]+$/';
		return preg_match($re, $valor);
	}
	function vnj_alphanumeric($valor){
		$re = '/^[0-9A-Za-z]+$/';
		return preg_match($re, $valor);
	}
	
?>