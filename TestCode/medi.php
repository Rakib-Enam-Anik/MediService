<?php
// medi.php
class medi {
    public function getNumberFromUserInput() {
        // complicated function to get number from user input
    }

    public function printToScreen($value) {
        // another complicated function
    }
    public function db {
       $servername="localhost";
$username="root";
$password="";
$dbname="php";

$connection = new mysqli($servername,$username,$password,$dbname);
if($connection->connect_error){
    die("connection failed".$connectin->connect_error);
    
    }

    public function login {
        if(isset($_POST['login']))
            {
                
                $username=$_POST['email'];
                $password=$_POST['password'];
                
                $query = "select * from information where email='$username' and password='$password' ";
                $query1 = "select first_name from information where email='$username'";
                $query_run = mysqli_query($connection,$query);
                $query_run1 = mysqli_query($connection,$query1);
                //echo mysql_num_rows($query_run);
                if($query_run)
                {
                    if(mysqli_num_rows($query_run)>0)
                    {
                    $row1 = mysqli_fetch_array($query_run1,MYSQLI_ASSOC);   
                    $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
                    $_SESSION['first_name'] =  $row1['first_name'];
                    $_SESSION['email'] = $username;
                    $_SESSION['password'] = $password;
                    //echo "email: ".$_SESSION['email']." ".$username."password: ".$_SESSION['password']." ". $password;
                    
                    //header( "Location: homepage.php");
                    echo("<script>window.location.href = 'homepage.php';</script>");
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                    }
                }
                else
                {
                    echo '<script type="text/javascript">alert("Database Error")</script>';
                }
            }
            else
            {
            }
    }

    public function logout {
       session_start();
session_destroy();
header("location:index.php");
    }
     public function message {
        <h1>Data Inserted Successfully</h1>
    }
     public function register {
       
       ?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
    <div id="main-wrapper">
    <center><h2>Sign Up Form</h2></center>
        <form action="register.php" method="post">
            <div class="imgcontainer">
                <img src="imgs/avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="inner_container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <label><b>Confirm Password</b></label>
                <input type="password" placeholder="Enter Password" name="cpassword" required>
                <button name="register" class="sign_up_btn" type="submit">Sign Up</button>
                
                <a href="index.php"><button type="button" class="back_btn"><< Back to Login</button></a>
            </div>
        </form>
        
        <?php
            if(isset($_POST['register']))
            {
                @$username=$_POST['username'];
                @$password=$_POST['password'];
                @$cpassword=$_POST['cpassword'];
                
                if($password==$cpassword)
                {
                    $query = "select * from userinfotbl where username='$username'";
                    //echo $query;
                $query_run = mysqli_query($con,$query);
                //echo mysql_num_rows($query_run);
                if($query_run)
                    {
                        if(mysqli_num_rows($query_run)>0)
                        {
                            echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
                        }
                        else
                        {
                            $query = "insert into userinfotbl values('$username','$password')";
                            $query_run = mysqli_query($con,$query);
                            if($query_run)
                            {
                                echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
                                $_SESSION['username'] = $username;
                                $_SESSION['password'] = $password;
                                header( "Location: homepage.php");
                            }
                            else
                            {
                                echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
                            }
                        }
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("DB error")</script>';
                    }
                }
                else
                {
                    echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
                }
                
            }
            else
            {
            }
        ?>
    </div>
</body>
</html>
    }
    }
}