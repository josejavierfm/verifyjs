<?
	require_once("verify.notify.php");
	
		echo (vnj_email("aaaaaa")?"bien ":"mal ");
		echo (vnj_email("aaaaa@asds.aa")?"bien ":"mal ");
		echo (vnj_url("asdfasfasdf")?"bien ":"mal ");
		echo (vnj_url("www.adsfd.es")?"bien ":"mal ");
		echo (vnj_url("https://www.adsfd.es")?"bien ":"mal ");
		echo (vnj_sinsimbolos("https://www.adsfd.es")?"bien ":"mal ");
		echo (vnj_sinsimbolos("asdf asd fasf ")?"bien ":"mal ");
		echo (vnj_sinsimbolos("asdf	 asd 	fasf
		")?"bien ":"mal ");
		echo (vnj_texto("asdf asd fasf. ")?"bien ":"mal ");
		echo (vnj_texto("asdf asd fasf ")?"bien ":"mal ");
		echo (vnj_alphanumeric("asdf asd fasf ")?"bien ":"mal ");
		echo (vnj_alphanumeric("asdf232as")?"bien ":"mal ");
?>