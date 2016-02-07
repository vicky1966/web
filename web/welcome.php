<?php
session_start();
?>

<!DOCTYPE html>
<html>
	
	
	
	<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title>This is our first project</title>
<style>
.jumbotron{
	top:0%;
	left:0%;
   height:200%;
   width: 200%;
   background-image: -o-linear-gradient(#8860af, #4e91cc, #c7deee);
   background-image: -moz-linear-gradient(#8860af, #4e91cc, #c7deee);
   background-image: -webkit-linear-gradient(#8860af, #4e91cc, #c7deee);
}
}
.form{
	position:absolute;
	top:0%;
	left:0%;
	height:50%;
	width:50%;
	overflow:hidden;
	background-color:yellow;
	font-family:algerian;
}
}
</style>
</head>

<body>
<div class="container">
<div class="jumbotron">
	
<?php

 

echo "you are welcome";
$name=$_SESSION['name'];
$_SESSION['n']=0;
echo $name;


$_SESSION['x']=1;

?>

	
	
	
	
	
<form action="question.php " method="post">
	
	
	
<select name="Subject" >\\this name is used to access data sent by post method to a php file
  <option value="MATHS">MATHS</option>
  <option value="DSPS">DSPS</option>
  <option value="OOMPL">OOMPL</option>
  <option value="MA">MA</option>
</select>
	<input type="submit"  value="start"/>		  
	
	
	
	</form>
</div>
</div>  
</body>
</html>


