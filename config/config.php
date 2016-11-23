<?php 
  
	$HOST 		= '127.0.0.1';
	$DBNAME 	= 'namastech';
	$DBLOGIN 	= 'root';
	$PASSWORD = '';

  $connect = mysqli_connect($HOST, $DBLOGIN, $PASSWORD);
  mysqli_select_db($connect,$DBNAME) or die( "Não foi possível conectar ao banco MySQL");

  if (!$connect) {
    die('não foi possivel conectar ao banco!');
  }
