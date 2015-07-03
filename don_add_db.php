<?php
session_start();

$conn= mysql_connect("localhost","root","");
$db= mysql_select_db("wildlife",$conn);

$zn=$_POST['zn'];
$an=$_POST['an'];
$desc=$_POST['desc'];
$perid= $_SESSION['uid'];


$sql="select MAX(don_id) from donate_table";
$result=mysql_query($sql);
$ans=mysql_fetch_assoc($result);
$idans=$ans['MAX(don_id)'];
$idwalaname =$idans+1;

//inserting image location

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType= pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"uploads/".$idwalaname.".".$imageFileType);
$namefile=$idwalaname.".".$imageFileType;
$sql="insert into donate_table values('','$perid','$zn','$an','$namefile','$desc')";

//$idwalanamae.".".$imageFileType
$result=mysql_query($sql);
//header("location:admiwork.php");

?>
