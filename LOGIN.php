<?php

$connect=  mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "simreka");
session_start();

if(isset($_POST['submit'])){
    
    $_SESSION['email']=$_POST['email'];
    $email=$_SESSION['email'];
    
    $_SESSION['password']=$_POST['password'];
    $pass=$_SESSION['password'];
    $permission_query="select * from users_permission where email='$email'";
    $result=  mysqli_query($connect, $permission_query);
    $row=  mysqli_fetch_assoc($result);
    
    $password_query=  mysqli_query($connect, "select * from users where email='$email' && password='$pass'");
    $password_row=  mysqli_fetch_assoc($password_query);
    
    //Verifying wheather the user is approved of not
    if($row['email']!=$email){
        echo '<script>alert("You dont have access to the system,please sign up with your official email ID to request access"); window.location="SignUp.php"; </script>';
    }
    else if($row['is_permission']=='no'){
        echo '<script>alert("You are not approved to view this content, please email the concerned person for approval"); window.location="LOGIN.php"; </script>';
    }
    else if($password_row['password']!=$pass){
        echo '<script>alert("Incorrect Password!!!!.TRY AGAIN"); window.location="LOGIN.php"; </script>';
    }
    else {
        header("location: UserDataView.php");
    }
}    
?>



<!DOCTYPE html>
<html>
    <head>
        <title>User LOGIN for SIMREKA</title>
        <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap/js/jQuery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            #div2{
                margin-top: 80px;
                margin-left: 300px;
                width: 600px;
                padding-top:  40px;
                padding-bottom: 40px;
                padding-left: 70px;
            }
            .panel{
                background-color: white;
                border: 10px solid burlywood;
                border-radius: 20px;
            }
            .panel-heading{
                background-color: white!important;
                height: 70px; 
                padding-bottom: 60px; 
                padding-top: 5px;
            }
            #h2{
                text-align: center;
                font-size: 25px;
            }
            body{
                background-color:whitesmoke;
            }
            button{background-color: blue;color: white;}
            .btn:hover{
                color: white;
                text-decoration: none;
            }
            .btn{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container" id="div2">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 id="h2">Login for <b>SIMREKA</b></h2>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="LOGIN.php">
                                <div class="form-group">
                                    <label>Email ID :</label>
                                    <input type="email" placeholder="Enter registered email id" name="email" required="true" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" placeholder="Enter Password" name="password" required="true" class="form-control">
                                </div>
                                <button class="btn btn-block" name="submit">SUBMIT</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <h4>Don't have an account?<a href="SignUp.php" target="_self"> Click here to SignUp</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
