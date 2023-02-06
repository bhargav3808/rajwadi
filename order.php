<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>order</title>
</head>
<body>
	<?php
	
		$name=$_POST['nm'];
		$phone=$_POST['phone'];
		$pmethod=$_POST['method'];
		$orderlist=$_POST['orderlist'];
		$addr=$_POST['add'];

		$conn=mysqli_connect("localhost","root","","data");

		// if($conn){
			// echo "WELCOME"."</br>";
			// echo $name."</br>";
			// echo $phone."</br>";
			// echo $pmethod."</br>";
			// echo $orderlist."</br>";
			// echo $addr."</br>";
			// mysqli_query($conn,"insert into order (name,phone,pmethod,order,address) VALUES ('$name','$phone','$pmethod','$orderlist','$addr')");

			 mysqli_query($conn,"INSERT INTO `order` (`name`, `phone`, `pmethod`, `order`, `address`) VALUES ('$name','$phone','$pmethod','$orderlist','$addr');");



		// $sql= "SELECT * FROM 'order'";

		// if($result=mysqli_query($conn,$sql))
		// {
		// 	while($row=mysqli_fetch_row($result))
		// 	echo "result :".$row[0]."(".$row[1].")<br>";
		// }


		
	 ?>

	 <h1>THANK YOU YOUR ORDER PLACED</h1>
</body>
</html>