<?php
session_start();
$con=mysqli_connect("localhost","root","","lcdb");
if(isset($_POST['login']))
{
	$email=$_POST['e-mail'];
	$password=$_POST['password'];
	if($email=="admin@gmail.com" && $password="password"){
		echo "<script>window.open('admin_dash.php','_self')</script>";
	}
	$query="select * from user where email='$email' and password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1)
{
	$_SESSION['name']=$row['name']; 
	$_SESSION['email']=$row['e-mail'];
	$_SESSION['id']=$row['id']; 
	$_SESSION['department']=$row['department'];
	$_SESSION['mobile']=$row['mobile'];
	header("Location:videos.html");
}
else
{
	echo "<script>alert('enter correct details')</script>";
	echo "<script>window.open('login.html','_self')</script>";
	
}
}
if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$email=$_POST['e-mail'];
	$password=$_POST['password'];
	$pass=$_POST['pass'];
	$contact=$_POST['contact'];
	$school=$_POST['school'];
	//$is_approved=true;
	echo $name,$email,$password,$contact,$school;
if($password==$pass)
{
	$query="insert into user(name,email,password,contact,school,is_approved) values('$name','$email','$password','$contact','$school',0)";
	$result=mysqli_query($con,$query);
	echo $result;
	if($result)
	{
		echo "<script>alert('Signedup Successfully')</script>";
		echo "<script>window.open('login.html','_self')</script>";
	
	}
	else
	{
		//echo "<script>alert('enter all the details')</script>";
		//echo "<script>window.open('signup.html','_self')</script>";
	
	}
}
else
{
	echo "<script>alert('enter same password twice')</script>";
		echo "<script>window.open('signup.html','_self')</script>";
	}
}
?>




