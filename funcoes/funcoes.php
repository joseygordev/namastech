<?php 

	function loginCheck() {
		if (!isset($_SESSION['typeUser'])) {
			header('Location: ../../index.php');
		}	
	}
	