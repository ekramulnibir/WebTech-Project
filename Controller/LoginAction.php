<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] === "POST"){
 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $flag=true;
    
    
        if(empty($email) && empty($password)){
            header("Location: ../View/Login.php?msg1="."Email and password can not be empty");
            $flag = false;
        }
        else{
    
            if(empty($email)){
            header("Location: ../View/Login.php?msg1="."email can not be empty");
            $flag = false;
            }
        
        
            if(empty($password)){
            header("Location: ../View/Login.php?msg1="."Password can not be empty");
            $flag = false;
        
        }
    
        }
        if($flag === true){
            require_once('../Model/db.php');
    
        $conn = dbConnection();
       
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        $sql = "SELECT password FROM admininfo WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                    if($password === $row['password']){
                    $_SESSION['login_email'] = $email;
                    $_SESSION['login_password'] = $password;
                    header('Location: ../View/Homepage.php');
                }
                else {
                    header("Location: ../View/Login.php?msg1="."email and password is wrong. Please try again.");
                }
            }
        }
        else {
            header("Location: ../View/Login.php?msg1="."email and password is wrong. Please try again.");
        }
    
        mysqli_close($conn);
        }
    }
?>