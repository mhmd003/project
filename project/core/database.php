<?php

$conn = mysqli_connect("localhost", "root", "","eraasoft");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
function get ($sql){
    global $conn;
    $result = mysqli_query($conn,$sql);
    $data=[];
    while($row = mysqli_fetch_assoc($result)){
    $data[]=$row;
    }
    return $data;
}
// function booking ($customer){
//   global $conn;
//   $sql="INSERT INTO `booking`(`name`,`email`,`phone`,`doctor_id`)VALUES ('$customer['name']','$customer['email']','$customer['phone']','$customer['id']')";
//   $result=mysqli_query($conn,$sql);
//   if(mysqli_affected_rows($conn)==1){
//   $_SESSION['success']="Data Inserted Successfully";
// }}
