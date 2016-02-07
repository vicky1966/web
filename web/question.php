<?php
session_start();
?>
<html>
<body>
	<br>
	
	<?php

	include("connection.php");
	$n =$_SESSION['n'];
	$x =$_SESSION['x'];
	if($n==0)
	{
		$Subject=$_POST['Subject'];
		
	}
	else 
		
	$Subject =$_SESSION['Subject'];	
	

	
	$query1="select * from $Subject where q_id='$x'";
$rs=mysql_query($query1) or die ("lol");
		if($row=mysql_fetch_assoc($rs))
	{
		$question=$row['question'];	
		$op1 =$row['option1'];
		$op2 =$row['option2'];
		$op3 =$row['option3'];
		$op4 =$row['option4'];
		
		
		}
	
	
	
	
		?>	
	<form action="question.php" name="ans" method="post">
	<?php echo $question ?>
		<br>
	<input type="radio" name="ans" ><?php  echo $op1     ?><br>
	
	<input type="radio" name="ans" ><?php  echo $op2     ?><br>
	
	<input type="radio" name="ans" ><?php  echo $op3     ?><br>
	
	<input type="radio" name="ans" ><?php  echo $op4     ?><br>
	
		<?php 
	
		$x=$x+1; 
		$n=1;
		
		$_SESSION['x']=$x;
		$_SESSION['n']=$n;
		$_SESSION['Subject']=$Subject;
		
		
		?>
	<input type="submit">
		
		
	</form>
	
	</body>





</html>

	
	

