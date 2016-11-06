<?php 
  session_start();
	require_once 'config/config.php';
	$paste = 'roles';

	if (isset($_POST['loginUser'])) {
    $sql = "SELECT * FROM user WHERE login = '".$_POST['email']."' AND password = '".$_POST['password']."' AND type = '".$_POST['type']."' ";
    $query = $connect->query($sql);
    $result = mysqli_fetch_assoc($query);

    if ($result == false) {
      header('Location: index.php?loged=false');
    } else {
      $_SESSION['typeUser'] = $result['type'];
      $_SESSION['nameUser'] = $result['name'];

      if ($_SESSION['typeUser'] === 'DEV') {
        header('Location: '.$paste.'/desenvolvimento'); 
      } elseif($_SESSION['typeUser'] === 'CLI') {
        header('Location: '.$paste.'/cliente'); 
      } elseif($_SESSION['typeUser'] === 'FIN') {
        header('Location: '.$paste.'/financeiro');  
      } elseif($_SESSION['typeUser'] === 'MAR') {
        header('Location: '.$paste.'/marketing'); 
      }
    }
	}

	if (isset($_GET['q']) && $_GET['q'] === 'logout') {
    session_destroy();
		header('Location: index.php');
	}
