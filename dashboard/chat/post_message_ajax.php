<?php
    require_once("connect.php");
    if(isset($_POST['message'])){
        $message = mysqli_real_escape_string($con, $_POST['message']);
        $conversation_id = mysqli_real_escape_string($con, $_POST['conversation_id']);
        $user_form = mysqli_real_escape_string($con, $_POST['user_form']);
        $user_to = mysqli_real_escape_string($con, $_POST['user_to']);
 
        $conversation_id = base64_decode($conversation_id);
        $user_form = base64_decode($user_form);
        $user_to = base64_decode($user_to);
 
        $q = mysqli_query($con, "INSERT INTO `messages` VALUES (NULL,'$conversation_id','$user_form','$user_to','$message')");
        if($q){
            echo "Posted";
        }else{
            echo "Error";
        }
    }
?>