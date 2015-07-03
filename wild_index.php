<?php

 
 $conn= mysql_connect("localhost","root","");
 $db= mysql_select_db("nikhil",$conn);
 
 
 if(isset($_GET['msg']))
 {
$msg=$_GET['msg'];

echo $msg;
 }

 ?>

 

 
 
<html>

<head>
   <title> welcome </title>
   <link rel= "stylesheet" type="text/css" href="hww.css">
    
	<script>
	 function fun1()
	 {
	   var a=document.getElementById("n").value;
       //alert("hiiiii");
	 }
	 
	 function showDiv() 
	   {
        document.getElementById('welcomeDiv').style.display = "block";
		document.getElementById('welcomeDiv2').style.display = "none";
       }
	   
	    function showDiv2() 
	   {
        document.getElementById('welcomeDiv2').style.display = "block";
		document.getElementById('welcomeDiv').style.display = "none";
       }
	</script>	
</head> 






<body>
   <div class="nn">

      <div class="nn1">
	  
        <div class="inn1">
		</div>
		
		<div class="inn33">
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HOME
		</div>
		
		<div class="inn">
		   <input type="button" name="answer" width="48" height="48" value="LOGIN" onclick="showDiv()" />
		</div> 
		
		
		<div class="inn">
		   <input type="button" color="black" font="48" name="answer" value="SIGNUP" onclick="showDiv2()" />
		</div>
      </div>
    
	
	
	  <div class="nn2">
	    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GOOGLE </h2>
        Google began in March 1995 as a research project by Larry Page and Sergey Brin, Ph.D. students at Stanford University
      </div>
	 
	 	  
	  
	  <div class="nn4" id="welcomeDiv" style="display:none;">
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN SECTION
		  <div class="container">       
             <form action="login_chek.php" method="post">
            <br>
			&nbsp;<label for="username">Username:</label>
			<input type="text" id="username" name="nn">
            <br> 
			&nbsp;<label for="password">Password:</label> 
           &nbsp; <input type="password" id="password" name="pp">
       
            <br><br>
			<input type="checkbox"><label for="checkbox">Keep me logged in</label>
            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="LOGIN">
		
            </form>
           </div>
      </div>
	 
	 
	 
	 
      <div class="nn42" id="welcomeDiv2" style="display:none;">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SIGN-UP  SECTION
		  <div class="container2">   
		  
              <form action="add.php" method="post">
             <label for="username">Username:</label>
			 &nbsp;
			 
			 <input type="text" id="username" name="nn">
            <br><br> 
			&nbsp;<label for="email">Email-id:</label>
            &nbsp;&nbsp;&nbsp;<input type="email" id="email" name="ee">
            <br><br> 
			&nbsp;<label for="password">Password:</label> 
            &nbsp;&nbsp;<input type="password" id="password" name="pp">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="SIGNUP">
             </form>
           </div>
      </div>	 
	  
	  
	  
	  
	  <div class="nn3" >
        <h1> 
		&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;THIS IS OUR FOOTER SECTION FOR GOOGLE
         </h1>
      </div>
	  
   </div>

   
 
   
</body>

</html>

 
 <?php

			
echo phpinfo();
?>