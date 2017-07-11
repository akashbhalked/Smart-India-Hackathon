<?php
    require_once("connect.php");
    if(isset($_GET['c_id'])){
        $conversation_id = base64_decode($_GET['c_id']);
        $q = mysqli_query($con, "SELECT * FROM `messages` WHERE conversation_id='$conversation_id'");
        if(mysqli_num_rows($q) > 0){
            while ($m = mysqli_fetch_assoc($q)) {
                $user_form = $m['user_from'];
                $user_to = $m['user_to'];
                $message = $m['message'];
                
                $user = mysqli_query($con, "SELECT username,img FROM `user` WHERE id='$user_form'");
                $user_fetch = mysqli_fetch_assoc($user);
                $user_form_username = $user_fetch['username'];
                $user_form_img = $user_fetch['img'];
                
                echo "
                            
                            <div class='message'>
                                <div class='img-con'>
                                    <img src='{$user_form_img}'>
                                </div>
                                <div class='text-con'>
                                    <a href='#''>{$user_form_username}</a>
                                    <p>{$message}</p>
                                </div>
                            </div>
                            <hr>";
 
            }
        }else{
            echo "No Messages";
        }
    }
 
?>