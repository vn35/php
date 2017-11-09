<meta charset="utf-8">
<h3>Thông Tin Giỏ Hàng</h3>
<?php 
	session_start();
 ?>
 <?php 
 if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
 	echo "<form action='updatecart.php' method='post'>";
 	echo "<table border='1' width ='600'>";
 	echo "<tr>";
 	echo "<td>Tên Sản Phẩm</td>";
 	echo "<td>Số Lượng</td>";
 	echo "<td>Giá</td>";
 	echo "<td>Thành Tiền</td>";
 	echo "<td>Xóa</td>";
 	echo "</tr>";
 	foreach ($_SESSION['cart'] as $list) {
 		echo "<tr>";
 		echo '<td>'.$list['name'] . '</td>';
 		echo "<td><input type='text' name='qty[".$list['id']."]'. value='". $list['qty']."']' /> </td>";
 		echo '<td>'.$list['price'] . '</td>';
 		echo "<td>". $list['qty'] * $list['price']."</td>";
 		echo "<td><a href='deletecart.php?id=".$list['id']."'>Xóa</a></td>";
 		echo "</tr>";

 	}
 	echo "</table>
 	<p align='right' style='width:600px;'>
 	<input type='submit' value='update' name='btnupdate'/>
 	</p>
 	";
 	echo "</from>";
 } else {
 	echo "<p>Chưa có sản phẩm nào</p>";
 }
  ?>
