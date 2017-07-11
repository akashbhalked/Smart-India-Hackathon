<?php require_once("connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Chat system</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 
</head>
<body style="background:#eee;">
    
    <div class="login-container">
        <?php
            if(isset($_POST['login'])){
                $username = trim(mysqli_real_escape_string($con, $_POST['username']));
                $password = trim(mysqli_real_escape_string($con, $_POST['password']));
                //$md5password = md5($password)
                $query = mysqli_query($con,"SELECT * FROM `user` WHERE username='$username' AND password='$password'");
                if(mysqli_num_rows($query) == 1){
                    
                    $fetch = mysqli_fetch_assoc($query);
                    session_start();
                    session_start();
                    $_SESSION['id'] = $fetch['id'];
                    $_SESSION['username'] = $fetch['username'];
                    header("Location: message.php");
                }else{
                    echo "<div class='alert alert-danger'>Invalid username Or password.</div>";
                }
            }
        ?>
                 

        <h1>Login</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <input required type="text" class="form-control" name="username" placeholder="Enter Your username.">
            </div>
            <div class="form-group">
                <input required type="password" class="form-control" name="password" placeholder="Enter Your password.">
            </div>
            <input type="submit" value="login"  name="login" class="btn btn-primary btn-block">
        </form>
        <br>
        <span><b>User & pass:</b> Sayan / abcdef</span><br>
        <span><b>User & pass:</b> Rishabh / abcdef</span><br>
        <span><b>User & pass:</b> Amit / abcdef</span><br>
        <span><b>User & pass:</b> Adesh / abcdef</span><br>
        <span><b>User & pass:</b> Anshul / abcdef</span><br>
        <span><b>User & pass:</b> Mayank / abcdef</span>
    </div>
    
</body>
</html>