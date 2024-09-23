<?php
//FUNCION PARA EVITAR EL GUARDADO DE INFORMACIÓN EN EL CACHE
//DEL NAVEGADOR QUE SE CONSIDERE DE CARACTER SENSIBLE.
	function noCache() {
	  header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
	  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	  header("Cache-Control: no-store, no-cache, must-revalidate");
	  header("Cache-Control: post-check=0, pre-check=0", false);
	  header("Pragma: no-cache");
	}
?>