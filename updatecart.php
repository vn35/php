<?php 
	session_start();
	$_SESSION['cart'];
	if (isset($_POST['btnupdate'])) {
		foreach ($_POST['qty'] as $key => $val) {
			if ($val <=0) {
				unset ($_SESSION['cart'][$key]);
			} else {
				$_SESSION['cart'][$key]['qty'] = $val;
			}
			
		}
	}
	header("location:viewcart.php");
 ?>