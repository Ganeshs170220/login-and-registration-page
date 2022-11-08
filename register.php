<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hci_assignment";
$conn = mysqli_connect($server,$username,$password,$dbname);
session_start();
if(isset($_POST['submit'])){
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
        // Given password
        $password = $_POST['password'];
        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialSymbols = preg_match('@[^\w]@', $password);
        
        
        if (!preg_match ($pattern, $email) ){  
            // $ErrMsg = "Email is not valid.";  
            // echo $ErrMsg;
            // echo strlen($password);
            $_SESSION['errmsg']="Email is not valid";
            header("location:registerpage.php");
        }
        elseif(strlen($password) < 8 || !$uppercase || !$lowercase || !$number || !$specialSymbols) {
            
            $_SESSION['passwordnot']= "password error";
                header("location:registerpage.php");
            // echo "<h1> 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.'</h1>";
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
            $_SESSION['mismatched']= "mismatched";
                header("location:registerpage.php");
        }
    }}}


?>