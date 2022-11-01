<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hci_assignment";
$conn = mysqli_connect($server,$username,$password,$dbname);
session_start();


if($_POST['submit']){
    $email = $_POST['username'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['repassword'];
    $data = $_POST;
        $sql=mysqli_query($conn,"SELECT * FROM registration where username='$email' AND password='$password'");
        if(mysqli_num_rows($sql)>0)
        {
            // echo "Email Id Already Exists"; 
            $_SESSION['Emailexists']= "Email Id Already Exists";
            header("location:registerpage.php");
            // exit;
        }
        else{
        $email = $_POST["username"];  
        $pattern = "^[s]+([0-9]{6})*@+\brguktsklm.ac.in\b^";  
        if (!preg_match ($pattern, $email) ){  
            // $ErrMsg = "Email is not valid.";  
            // echo $ErrMsg;  
            $_SESSION['errmsg']="Email is not valid";
            header("location:registerpage.php");
        } 
        else{
        if(($password === $passwordConfirm) && (mysqli_num_rows($sql)<=0)){
            $query = "INSERT INTO registration (`username`,`password`,`repassword`) VALUES('$email','$password','$passwordConfirm')";
            $data = mysqli_query($conn,$query);
            if($data){
                // echo "Data Inserted into Database";
                $_SESSION['registrationsuccess']= "registration successful";
                header("location:registerpage.php");
            }
            else{
                echo "Failed";
            }

        }
        else{
            echo "both passwords are mismatched";
        }
    }}}


?>