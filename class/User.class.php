<?php 

	class User{

		public function __construct($pdo) {
			$this->pdo = $pdo;
		}	

		public function login($login, $password, $type) {
			$query = $this->pdo->prepare('SELECT * FROM user WHERE login = :login AND password = :password AND type = :type');
			$query->bindParam(':login', $login);
			$query->bindParam(':password', $password);
			$query->bindParam(':type', $type);
			$result = $query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			if (isset($result['type'])) {
				session_start();
				$_SESSION['typeUser'] = $result['type'];
				$_SESSION['nameUser'] = $result['name'];

				$result[0] = 1;
				$result[1] = 'Login feito com sucesso';
				return $result;
			} else {
				return false;	
			}
		}

		public function logout() {
			session_destroy();
			$result[0] = 1;
			$result[1] = 'Logout feito com sucesso';
			return $result;
		}

	}