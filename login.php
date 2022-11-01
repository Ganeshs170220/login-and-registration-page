<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hci_assignment";
$conn = mysqli_connect($server,$username,$password,$dbname);
session_start(); 
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $username && $row['password'] === $password ) {
                header("location:https://rguktsklm.ac.in/");
                }
                else{
                    $_SESSION['loginfailed']= "loginfailed";
                    header("location:loginpage.php");
                    // echo "error";
                }
        }
        else{
            $_SESSION['loginfail']= "loginfailed";
            header("location:loginpage.php");
            // echo "error";
        }
    }
   
}
else{
    $_SESSION['loginerror']= "loginfailed";
    header("location:loginpage.php");
    // echo "error";
}


?>
</body>
</html>
