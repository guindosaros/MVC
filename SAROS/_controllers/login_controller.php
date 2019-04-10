<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/04/2019
 * Time: 14:21
 */

 if (isset($_POST)  && !empty($_POST) ) {
     
     $email=$_POST['email'];
     $password=$_POST['password'];

     $state=validFrom([$email,$password]);
     if($state){
         $user=User::login($email,$password);
         if($user){
             header("location:dashboard");
         }else{
             header("location:login");
         }

     }
     $_SESSION['username']=$user['user_name'];
 }