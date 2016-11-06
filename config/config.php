<?php 

	$HOST 		= '127.0.0.1';
	$DBNAME 	= 'namastech';
	$DBLOGIN 	= 'root';
	$PASSWORD = '';
  
  $connect = new mysqli($HOST, $DBLOGIN, $PASSWORD, $DBNAME); 
  if (!$connect) {
    die('não foi possivel conectar ao banco!');
  }
