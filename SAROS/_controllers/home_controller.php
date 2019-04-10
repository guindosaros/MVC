<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/04/2019
 * Time: 12:12
 */


$name='NICAISE';

if(isset($_GET['nom']) && isset($_GET['prenom'])  && !empty($_GET['nom']) && !empty($_GET['prenom'])){
  $name=$_GET['nom'];
  $prenom=$_GET['prenom'];
}

if(isset($_GET['email']) && isset($_GET['email'])  && !empty($_GET['pass']) && !empty($_GET['pass'])){
    $email=$_GET['email'];
    $pass=$_GET['pass'];
}

if(isset($_GET['age']) && isset($_GET['age'])  && !empty($_GET['contact']) && !empty($_GET['contact'])){
    $age=$_GET['age'];
    $contact=$_GET['contact'];
}
