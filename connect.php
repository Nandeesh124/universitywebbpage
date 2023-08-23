<?php
$username=$_POST['username'];
$password=$_POST['password'];
 $conn=new mysqli('localhost','root','','text');
 if($conn->connect_error){
     die('Connection failed: '.$conn->connect_error);
 }
 else{
     $stmt=$conn->prepare("insert into regiser(username,password) values(?,?)");
     $stmt->bind_param("ss",$username,$password);
     $stmt->execute();
     echo "registration successfully";
     $stmt->close();
     $conn->close(); 
 }
?>