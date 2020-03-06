<?php 

$bd = "mysql";

switch ($bd) {
    case 'mysql':
		define("SERVER","localhost" );
		define("USER", "root");
		define("PASSWORD","515t3m45" );
		define("DB", "brayans");
		define("PORT", "3306");
		define("DRIVER", "mysqli.class.php");
		break;
}




?>