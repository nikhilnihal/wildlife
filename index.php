<?php

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("nikhil",$conn);
 
 ?>

  
  
  
<html>

<head>
   <title> welcome </title>
   <link rel= "stylesheet" type="text/css" href="index_page.css">
    
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
	  
	    <div class="inn33">
			 &nbsp;&nbsp;&nbsp;HOME
		</div>
		
        <div class="inn">
		  &nbsp;&nbsp;&nbsp; <a href="gallery.php"> GALLERY </a>
		</div>
		
		
		<div class="inn">
		   <input type="button" name="answer" width="48" height="48" value="LOGIN" onclick="showDiv()" />
		</div> 
		
		
		<div class="inn">
		   <input type="button" color="black" font="48" name="answer" value="SIGNUP" onclick="showDiv2()" />
		</div>
      </div>
    
	 
	 	    
	  
	  <div class="nn4" id="welcomeDiv">
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN SECTION
		   <div class="notice">
		    <?php
			if(isset($_GET['msg']))
             { 
               $ms=$_GET['msg'];
               echo $ms;
             }
			 ?>
		   </div>
		  <div class="container">       
             <form action="login_check.php" method="post">
            <br>
			&nbsp;<label for="username">Username:</label>
			<input type="text" id="username" name="nn">
            <br> 
			&nbsp;<label for="password">Password:</label> 
           &nbsp; <input type="password" id="password" name="pp">
       
            <br><br>
		 <input type="submit" value="LOGIN"><input type="checkbox"><label for="checkbox">Keep me logged in</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
            </form>
           </div>
      </div>
	 
	 
	 
      <div class="nn42" id="welcomeDiv2" style="display:none;">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SIGN-UP  SECTION
		  
		   <div class="container2">   
		  
              <form action="signup.php" method="post">
			  
           USERNAME :  <input type="text" id="username" name="nn">
            <br> 
		   EMAIL: <input type="email" id="email" name="ee">
            <br> 
		   PASSWORD : <input type="password" id="password" name="pp">
		    <br> <br>
			 <input type="submit" value="SIGNUP">
             </form>
           </div>
      </div>	 
	  
	  
	  
	  
	  
	  <div class="nn3" >
          <marquee scrollamount="10"
            direction="right"
            behavior="scroll">
			
			 <tr>
              <td> <img src="1.jpg" width="300" height="200">  </td>
              <td>  <img src="2.jpg"  width="300" height="200">  </td> 
              <td>  <img src="3.jpg"  width="300" height="200"> </td>
			  <td> <img src="4.jpg"  width="300" height="200">  </td>
              <td>  <img src="5.jpg"  width="300" height="200">  </td> 
              <td>  <img src="6.jpg"  width="300" height="200">  </td>
             </tr>
          </marquee>
      </div>
	  
   </div>

   
 
   
</body>

</html>

 
 <?php
		
echo phpinfo();
?>