<?php

include ("Slim/Slim.php");

//registar la instancia de slim
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

//localhost/profiles/facebook.php

$app->get ( '/:id_facebook',function($id_facebook) use ($app){ 

	 try {
 	     $data = file_get_contents('https://graph.facebook.com/'.trim($id_facebook).'?fields=id,first_name,last_name,email,gender,location,birthday&access_token=EAAapeuP4SyQBABZAP56N5Crt0m4HlxFkt05GEaT6J5FgoZBy759Ls6STZBFX2Kx2Nzbnzby6KnLk2PYhIfronSvdx2bCVzbnBfbQcw5nVMqr2mTLrGL6KgCZCE7uaLgfRceX2UiNyRTSzlJUqa1cDhxqcf8smfgZD');	
		 echo $data;     
	 }catch (Exception $e) {
		echo '<BR><BR><BR> Error usuario Id no existe o no hay conexion con la API de Facebook, por favor intente con otro Id o valide su conexion a internet  '."\n";
	}
  }
);
//inicia la api
$app->run();

?> 


