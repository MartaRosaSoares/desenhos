<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('BASE','desenhos');
	
	$conn = new mysqli(HOST,USER,PASS,BASE);
	
	if(mysqli_connect_errno()){
		printf("Conexão falhou: %s\n", mysqli_connect_error());
		exit();
	}
?>



