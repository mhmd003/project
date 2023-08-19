<?php 
include('val.php');
include('database.php');
session_start();

if(isset($_POST['confirm'])){
$name=($_POST['name']);
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject =$_POST[' subject '];
$message=$_POST['message'];

$customer=[
    'name'=> $name,
    'email'=> $email,
    'phone'=> $phone,
    'phone'=> $phone,
    'message'=> $message,    
];

$errors['name']=validatename($name);
$errors['email']=validateemail($email);
$errors['phone']=validatephone($phone);

if(pagempty($errors)){
  global $conn;
  $sql="INSERT INTO booking (name,email,phone,doctor_id)VALUES ('$name','$email','$phone','$id')";
  $result=mysqli_query($conn,$sql);
  if(mysqli_affected_rows($conn)==1){
  $_SESSION['success']="Data Inserted Successfully";
// booking ($customer);

}

header("location: ../veiw/index.php");
}else{
header("loction: ../veiw/booking.php");


$_SESSION['errors']=$errors;

$_SESSION['old']=[
    'name' =>$name,
    'email' =>$email,
    'phone' =>$phone,  ];
}}