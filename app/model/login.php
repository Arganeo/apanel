<?php
include '../../core/class/db.class.php';

if (!empty($_POST)) {
	$email = $_POST['email'];
	$password = sha1($_POST['password']);

		$q = array('email'=>$email,'password'=>$password);
		$sql = 'SELECT email,password,pseudo FROM users WHERE email = :email AND password = :password';
		$req = $db->prepare($sql);
		$req->execute($q);
		$count = $req->rowCount($sql);
		if ($count == 1 or $count == 2) {
			//Si ok
			$_SESSION['Auth'] = array(
				'email'=>$email,
				'password'=>$password
			);
			echo '1';
		}else{
			echo '0';
		}
}

?>