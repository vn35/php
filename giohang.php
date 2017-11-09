<?php 
		session_start();

 ?>
<meta charset="utf-8">
<h3>Danh Sách Sản Phẩm</h3>
<style>
	ul {
		margin: 0px;
		padding: 0px;
		list-style: none;
	}
	ul li {
		width: 400px;
		border: 1px dashed #ccc;
		padding: 5px;
	}
	ul li h3 {
		font-size: 14px;
		color: #000;
	}
	ul li a {
		text-decoration: none;
		color: #000;
	}
	ul li a:hover {
		color: orange;
	}
</style>
<p>
<?php 
$total = 0;
if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
	foreach ($_SESSION['cart'] as $list) {
		$total += $list['qty'];
	}
}
 ?>

Đang có <?php echo $total; ?> sản phẩm trong giỏ hàng</p>

<?php
require_once 'listproduc.php';
echo "<ul>";
foreach ($product as $listProduct) {
	echo "<li><h3>" . $listProduct['name']. "</h3>
	<p>Giá bán:".number_format($listProduct['price'],0)."</p>
	<p><a href='insertcard.php ?id=".$listProduct['id']."'> Mua Ngay </a>
	</li>";
}
echo "</ul>";

 ?>