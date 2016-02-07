<?php
session_start();
?>

<?php


//include("connection.php");
//$rs=mysql_query("select * from mst_user where login='$lid'");
include("connection.php");

$n=$_POST["name"];

$q=$_POST["password"];

$_SESSION['name']=$n;


echo "$n";

$query1="select * from users where name='$n'";
$rs=mysql_query($query1) or die ("lol");


//if ($rs->num_rows > 0) {
    // output data of each row
	while($row=mysql_fetch_assoc($rs))
	{
		$a=$row['name'];
		$b=$row['password'];
       if($a==$n && $b==$q)
	   {
          
		   header("Location:welcome.php");
		   
	   }
	   else
		   echo "<h1>FUCK YOU!!!";
	}
   

?>
<?php

echo "$n";
?>