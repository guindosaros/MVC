<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/04/2019
 * Time: 14:22
 */

$members=User::getAllMembers();

if (isset($_POST)  && !empty($_POST) ) {
     
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $contact=$_POST['contact'];

    $state=validFrom([$nom,$prenom,$contact,$age]);
    if($state){
        $members=User::insertMember($nom,$prenom,$contact,$age);
    }
    
}
if(isset($_GET['id']) && !empty($_GET['id'] )){
    User::deleteMember($_GET['id']);
    header("location:dashboard");
}
