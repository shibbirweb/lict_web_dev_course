<?php 
	session_start();
	if (strtoupper($_SERVER['REQUEST_METHOD'] == "POST")) {
		if (isset($_POST['update'])) {
			if (array_key_exists('main_data', $_SESSION) && !empty($_SESSION['main_data'])) {
				if (!empty($_POST['gender'])) {
					$gender  = $_POST['gender'];
					$_SESSION['data'][$_POST['id']] = array(
												'gender'  => $gender
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