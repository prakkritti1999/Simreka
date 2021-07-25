<?php
if(isset($_POST['login'])){
    $connect=  mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "simreka");
    session_start();
    
    $_SESSION['Admin_Email']=$_POST['email'];
    $admin_email=$_SESSION['Admin_Email'];
    
    $_SESSION['Admin_Password']=$_POST['password'];
    $admin_pass=$_SESSION['Admin_Password'];
    
    $admin_query=  mysqli_query($connect, "select * from admin where Admin_Email='$admin_email'&& Admin_Password='$admin_pass'");
    $admin_result=  mysqli_fetch_assoc($admin_query);
    
    if($admin_email==$admin_result['Admin_Email']){
        if($admin_pass==$admin_result['Admin_Password']){
            header("location: AdminLoginView.php");
        }
        else {
            echo '<script>alert("Incorrect Email id or password"); window.location="AdminLOGIN.php";</script>';
        }
    }
    else{
        echo '<script>alert("Incorrect Email id or password"); window.location="AdminLOGIN.php";</script>';
    }
    
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin LOGIN for SIMREKA</title>
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
                            <h2 id="h2">Admin Login for <b>SIMREKA</b></h2>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="AdminLOGIN.php">
                                <div class="form-group">
                                    <label>Email ID :</label>
                                    <input type="email" placeholder="Enter registered email id" name="email" required="true" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" placeholder="Enter Password" name="password" required="true" class="form-control">
                                </div>
                                <button class="btn btn-block" name="login">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

