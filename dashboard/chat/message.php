<?php
    require_once("connect.php");
    session_start();
    if(isset($_SESSION['id'])){
        $user_id = $_SESSION['id'];
    }else{
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chat system</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <center>
        
        <strong>Welcome <?php echo $_SESSION['username']; ?>  <a href="logout.php">logout</a></strong>
    </center>
     
    <div class="message-body">
        <div class="message-left">
            <ul class="friends">
                <?php
                    $q = mysqli_query($con, "SELECT * FROM `user` WHERE id!='$user_id'");
                    while($row = mysqli_fetch_assoc($q)){
                        echo "<a href='message.php?id={$row['id']}'><li id=rec{$row['id']}><img src='{$row['img']}'> {$row['username']}</li></a>";
                    }
                ?>
            </ul>
        </div>
 
        <div class="message-right">
            <div class="display-message">
            <?php
                if(isset($_GET['id'])){
                    $user_two = trim(mysqli_real_escape_string($con, $_GET['id']));
                    $q = mysqli_query($con, "SELECT `id` FROM `user` WHERE id='$user_two' AND id!='$user_id'");
                    if(mysqli_num_rows($q) == 1){
                        $conver = mysqli_query($con, "SELECT * FROM `conversation` WHERE (user_one='$user_id' AND user_two='$user_two') OR (user_one='$user_two' AND user_two='$user_id')");
                        if(mysqli_num_rows($conver) == 1){
                            $fetch = mysqli_fetch_assoc($conver);
                            $conversation_id = $fetch['id'];
                        }else{ 
                            $q = mysqli_query($con, "INSERT INTO `conversation` VALUES (NULL,'$user_id',$user_two)");
                            $conversation_id = mysqli_insert_id($con);
                        }
                    }else{
                        die("Invalid $_GET ID.");
                    }
                }else {
                    die("Click On the Person to start Chating.");
                }
            ?>
            </div>
 
            <div class="send-message">
                
                <input type="hidden" id="conversation_id" value="<?php echo base64_encode($conversation_id); ?>">
                <input type="hidden" id="user_form" value="<?php echo base64_encode($user_id); ?>">
                <input type="hidden" id="user_to" value="<?php echo base64_encode($user_two); ?>">
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Enter Your Message"></textarea>
                </div>
                <button class="btn btn-primary" id="reply">Reply</button> 
                <span id="error"></span>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script> 
</body>
</html>