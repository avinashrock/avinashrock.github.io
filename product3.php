<?php session_start();?>
<!DOCTYPE html>
<html>
<body>
	<h1>TELEVISION</h1>
	<?php
		echo "Hai folks <br>";
		$username="root";
		$servername="localhost";
		$password="";
                $database="avinash";
		$connect=mysql_connect($servername,$username,$password,$database);
		if(!$connect){
			echo "Error not connected to the server";
		}
		$quan=$_POST['quantity'];
		echo "Your Product quantity is ".$quan."<br>";
		$name="TELEVISION";
		$price=10000;
		$_SESSION['each']= $quan * $price;
		$u=$_SESSION['login_user'];
		$total=$_SESSION['each'];
		echo $total."<br>";
		$sql ="INSERT INTO `avinash`.billing (User,Name,Quantity,Price,Total) VALUES ('$u','$name','$quan','$price','$total')";
                if (!mysql_query($sql)) {
                      echo "Your item didn't add to the cart";
                } 
                else {
                      echo "Inserted successfully <br>";
		      echo "Enjoy your deal";
                  }
	?>
		 

</body>
</html>