<?php

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("wildlife",$conn);


$n1=$_POST['nn'];
$n2=$_POST['ee'];
$n3=$_POST['pp'];

echo $n1;
echo $n2;

	    $pp1="Select * from mamber WHERE (username='$n1' and password='$n3')";
        $pp1=mysql_query($pp1);
        $number=mysql_num_rows($pp1);
		echo $number;
        if($number>=1)
        {
		 header ("Location:already_signedup.php");
		}

		else
		{
         $sql="insert into mamber values('','$n1','$n2','$n3')";
         mysql_query($sql);
		 header("Location:index.php");
		}




?>
