<?php

session_start();

 if(!isset($_SESSION['loggedin']))
 {
 $msg= "not logged in";
 header ("Location:index.php?msg=$msg");
 }
?>




<html>
    <head>
    <title> welcome </title>
    <link rel= "stylesheet" type="text/css" href="welcome_page.css">
	
	<script>
	   	 function showDiv() 
	     {
         document.getElementById('donatebox').style.display = "block";	
		 document.getElementById('yourdonation').style.display = "none";
         }
		
		function showDiv2() 
	     {
		 document.getElementById('yourdonation').style.display ="block";
         document.getElementById('donatebox').style.display = "none";
         }
	</script> 
    </head>
	
	
	   <body id="bodid"> 
	   
		   <div class="nn1">
	  
	        <div class="innn1">
			  <?php $bb=$_SESSION['un']; echo "welcome  ";  echo $bb; ?>
            </div>
		
            <div class="innn">
		     &nbsp;&nbsp; <a href="gallery.php"> GALLERY </a>
		   </div>
		
		   <div class="innn">
		    <input type="button" value="DONATE" onclick="showDiv()" />
		   </div>
		
		   <div class="innn">
		    <input type="button" value="YOUR DONATION" onclick="showDiv2()" />
		   </div>
		   
		   <div class="innn">
		    <a href="logout.php"> Logout </a>  
		   </div> 
		
         </div>
	  
	  
	
	
		   <div class="donate" id="donatebox" style="display:none;">
		   
		    <div class="do_donate">
					    
	          <form action="don_add_db.php" method="post" enctype="multipart/form-data">
			  
			  <ul>
			   &nbsp;&nbsp;&nbsp;&nbsp;<label for="animal_nm"> DONATE ANIMALS :</label>
			    <li><hr>
              <label for="zoo name">zoo name:</label> &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="zoo_name" name="zn">		  
              </hr>	</li>
			  
			   <li><hr>
			  <label for="animal_nm">Animal Name:</label> 
              &nbsp;&nbsp;<input type="text" id="animal_name" name="an">
              </hr></li>
			  
			  <li> <hr>
			  &nbsp;<label for="image">Image :</label> 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" id="image" name="fileToUpload">
             </hr> </li>	

			 <li> <hr>
			  &nbsp;<label for="description">Description:</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="description" name="desc">
             </hr> </li>

             <hr>			 
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Donate">	
			  </hr>
			  <ul>
            </form>
			</div>		
		 </div>
		 
		 
		 
		 
		   <div class="donated" id="yourdonation" style="display:none;">
		   		   <?php

                    $conn= mysql_connect("localhost","root","");
                    $db= mysql_select_db("wildlife",$conn);

					 $mm=$_SESSION['uid'];
					 
                     $sql="SELECT * FROM  donate_table where pid=$mm order by don_id desc";
                     $result=mysql_query($sql);
                     if($result)
                     while($row= mysql_fetch_assoc($result))   
                     {
						 echo "<hr>";
						 echo '<div class="row">';
						   echo '<div class="picbox">';
                           $filename=$row['animal_image'];
					       echo '<img src="uploads/'.$filename.'" style="width:300px;height:222px">'; 
						   echo'</div>';
						 
						   echo'<div class="descbox">';
						   echo "ANIMAL NAME        :";          echo $row['animal_name']; 
                           echo "<br>";						   
						   echo "ANIMAL DESCRIPTION :";          echo $row['animal_desc'];
						   echo "<br>";
						   echo "ZOO NAME           :";          echo $row['zoo_name'];
						   echo "<br>";
						   echo'</div>';
						echo'</div>';
						 echo "</hr>";
                     } 
					if(mysql_num_rows($result)==0)
					 {
						 echo '<div class="sorry">';
						 echo "sorry... ".$_SESSION['un']."   you haven't donated anything yet";
						 echo'</div>';
					 }
			    ?>
		   </div>
		 
		 	 
	   </body>

	  </html>
	  
