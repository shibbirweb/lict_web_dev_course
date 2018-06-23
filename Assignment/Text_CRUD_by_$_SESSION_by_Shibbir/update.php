<?php 
	session_start();
	if (strtoupper($_SERVER['REQUEST_METHOD'] == "POST")) {
		if (isset($_POST['update'])) {
			if (array_key_exists('data', $_SESSION) && !empty($_SESSION['data'])) {
				if (!empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address'])) {
					$f_name  = validate($_POST['f_name']);
					$l_name  = validate($_POST['l_name']);
					$email   = validate($_POST['email']);
					$phone   = validate($_POST['phone']);
					$address = validate($_POST['address']);
					$_SESSION['data'][$_POST['id']] = array(
												'f_name'  => $f_name,
												'l_name'  => $l_name,
												'email'   => $email,
												'phone'   => $phone,
												'address' => $address
											);
					$_SESSION['msg'] = "<span style='color:blue;'>Record updated successfully</span>";
					header('location:index.php');

				}else{
					$_SESSION['msg'] = "<span style='color:red;'>Field must not be empty</span>";
					header('location:edit.php?id='.urlencode($_POST['id']));
			}
		}else{
			header('location:index.php');
		}
	}else{
		header('location:index.php');
	}
}else{
	header('location:index.php');
}
	function validate($data){
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = stripcslashes($data);
		return $data;
	}
 ?>