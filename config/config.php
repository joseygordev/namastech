<?php 

	$HOST 		= '127.0.0.1';
	$DBNAME 	= 'namastech';
	$DBLOGIN 	= 'root';
	$PASSWORD = '';

	try{
		$pdo = new PDO('mysql:host='.$HOST.';dbname='.$DBNAME.';', $DBLOGIN, $PASSWORD);	
	}
	catch(PDOException $e){
		print "Erro: " . $e->getMessage() . "<br/>";
	    die();
	}