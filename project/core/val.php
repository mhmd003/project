<?php
function validatename($name):?string
{
    $error=null;
    if(empty($name)){
        $error="name is required";
    }elseif(!is_string($name) || is_numeric($name)){
       $error="must be string";
    }elseif(strlen($name)>255){
        $error="must less than 255";
    }
    return$error;
}

function validateemail($email):?string
{
 $error=null;
 if(empty($email)){
    $error="email is required";
 }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error="valid email is reqired";
 }elseif(strlen($email)>255){
    $error="must less than 255";
 }
 return $error;
}
function countDigits($number) {
    $numberAsString = (string) $number;
    return strlen($numberAsString);
}
function validatephone($phone):?string
{
 $error=null;
 if(empty($phone)){
    $error="phone is required";
}elseif(is_string($phone) || !is_numeric($phone)){
    $error="must be numbers";
 } 
 elseif(countDigits($phone)<=5 && countDigits($phone)>=12){
     $error="number must betwean 6 <> 11";
 }
 return $error;
}

function pagempty(array $errors):bool{

    foreach($errors as $value){
    if ($value=null){
        return true;
    }
    }
    
    return false;
    }