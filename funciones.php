<?php
//Declaramos variables globales
	session_start();
	$_SESSION['login'] = false;

	function base_url($url){
		return 'http://localhost/Proyecto_Domotica/'.$url;
	}
?>