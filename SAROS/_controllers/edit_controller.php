<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/04/2019
 * Time: 13:54
 */

if(isset($_GET['edit'])  && !empty($_GET['edit']) ){
    $id=$_GET['edit'];

    $member=User::getMember($id);
}

if(isset($_POST)  && !empty($_POST) ){
    $id=$_GET['edit'];

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $contact=$_POST['contact'];

    $state=validFrom([$nom,$prenom,$contact,$age]);
    if($state){
        User::updateMember($nom,$prenom,$contact,$age,$id);
        header("location:dashboard");
        
    }
}