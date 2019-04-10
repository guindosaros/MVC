<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/04/2019
 * Time: 15:58
 */

class User
{
   static function login($email, $password){
       global $db;
       $stat = $db->prepare('SELECT * FROM users where user_email = ? AND user_password = ?');
       $stat->execute(array($email,$password));
       return $stat->fetch();
   }
    static function signin($name,$email, $password){
        global $db;
        $stat = $db->query("INSERT INTO users(user_name,user_email,user_password) VALUES ('$name','$email','$password')");
        header("location:dashboard");
        return $stat->fetch();
    }
    static function getLastId(){
       global $db;
       $lastUser = $db->prepare('SELECT * FROM users ORDER BY id DESC LIMIT 1');
       $lastUser->execute([]);
       return $lastUser->fetch();
    }

    static function getAllMembers(){
        global $db;
        $stat=$db->prepare('SELECT * FROM members');
        $stat->execute([]);
        return $stat->fetchAll();
    }

    static function insertMember($name,$lname,$contact,$age){
        global $db;
        $stat = $db->query("INSERT INTO members(member_name,member_lname,member_contact,member_age) VALUES ('$name','$lname','$contact','$age')");
        header("location:dashboard");
        return $stat->fetch();
    }

    static function deleteMember($id){
        global $db;
        $stat = $db->prepare('DELETE FROM members WHERE id= ?');
        $stat->execute([$id]); 
    }

    static function getMember($id){
        global $db;

        $stat=$db->prepare('SELECT * FROM members WHERE id=?');
        $stat->execute([$id]);
        return $stat->fetch();
    }

    static function updateMember($name,$lname,$contact,$age,$id){
        global $db;
        $stat = $db->prepare("UPDATE members SET member_name=?, member_lname=?, member_contact=?,member_age=? WHERE id=?");
        $stat->execute([$name,$lname,$contact,$age,$id]);
        
    }
}