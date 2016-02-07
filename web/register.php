<html>

<body>
<?php

include("connection.php");

$n=$_POST["name"];
$m=$_POST["branch"];
$p=$_POST["college"];
$q=$_POST["password"];

$query1="insert into users (name,branch,college,password) values('$n','$m','$p','$q')";
$rs=mysql_query($query1) or die ("lol");


$query2="create table $n(name varchar(20),questions int)";
$rs=mysql_query($query2) or die (" cannot create table ");

?>
<a href="login.html">login</a>
</body>
</html>