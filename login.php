<?php 
	require_once 'config/config.php';
	require_once 'class/User.class.php';

	$paste = 'roles';
	$userClass = new User($pdo);

	if (isset($_POST['loginUser'])) {
		$resultLogin = $userClass->login($_POST['email'], $_POST['password'], $_POST['type']);
		if ($resultLogin[0] === 1) {
			if ($_SESSION['typeUser'] === 'DEV') {
				header('Location: '.$paste.'/desenvolvimento');	
			} elseif($_SESSION['typeUser'] === 'CLI') {
				header('Location: '.$paste.'/cliente');	
			} elseif($_SESSION['typeUser'] === 'FIN') {
				header('Location: '.$paste.'/financeiro');	
			} elseif($_SESSION['typeUser'] === 'MAR') {
				header('Location: '.$paste.'/marketing');	
			}
		} else {
			header('Location: index.php?loged=false');
		}
	}

	if (isset($_GET['q']) && $_GET['q'] == 'logout') {
		session_start();
		$logout = $userClass->logout();
		if ($logout[0] === 1) {
			session_destroy();
			header('Location: index.php');
		}
	}