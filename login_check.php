<?php
session_start();

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("wildlife",$conn);

$n1=$_POST["nn"];
$n2=$_POST["pp"];
echo $n1;
echo $n2;

$sql="SELECT * from mamber WHERE (username='$n1' and password='$n2')";

$qury=mysql_query($sql);
$result=mysql_num_rows($qury);   ///this will return the rows

    echo $result;
    if($result>0)
    {
     echo "successful";
     echo "welcome";

	 $_SESSION['loggedin']="true";
     $_SESSION['un']=$n1;  
     	 
	
			

	 $sql="SELECT * from mamber WHERE (username='$n1' and password='$n2')";
	 $pp1=mysql_query($sql);
	 
	 while($row = mysql_fetch_array($pp1))
	 {
	  $kk=$row['uid'];
	 }
	 $_SESSION['uid']=$kk;  
	 
	  
	 ///global variable creation
     header ("Location:welcome_page.php");
    }
  else	  
  {  
	  $msg= " unsuccessfull login ";
	  echo $msg;
	  echo $n1;
      echo $n2;
	  header ("Location:index.php?msg=$msg");
	  
  }

?>