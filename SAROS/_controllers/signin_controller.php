<?php
if (isset($_POST)  && !empty($_POST) ) {
    $user=User::signin($_POST['name'], $_POST['email'], $_POST['password']);
    $_SESSION['username']=$user['user_name'];
}