<?php
    
    $connect=  mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "simreka");

    if(isset($_POST['editsubmit'])){
        $email=$_SESSION['email'];
        $pass=$_SESSION['password'];

        $editfname=$_POST['editfname'];
        $editlname=$_POST['editlname'];
        
        $update_query="update users set firstName='$editfname',lastName='$editlname' where email='$email' && password='$pass'";
        $result=  mysqli_query($connect, $update_query);
        echo '<script> alert("Details updated successfully"); window.location="UserDataView.php";</script>';        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Profile</title>
        <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap/js/jQuery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
        <style>
            body{
                background-color: aliceblue;
            }
            .profile{
                margin-right: 200px;
                width: 50%;
            }
            .profile h3{
                color: brown;
                text-transform: capitalize;
                font-weight: bold;
            }
            .data-div{
                top: 100px;
            }
            .data-div table{
                background-color: windowframe;
                border-color: blue;
            }
            .data-div h3{
                color: cornflowerblue;
            }
            .right-div{
                margin-right: 100px;
                margin-top: 10px;
                display: inline-block;
            }
            .right-div li a{
                font-size: 15px;
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
            #div2{
                margin-top: 80px;
                margin-left: 300px;
                width: 600px;
                padding-top:  40px;
                padding-bottom: 40px;
                box-shadow: 10px,10px,10px,10px;
                padding-left: 70px;
            }
        </style>
    </head>
    <body>
        <div class="container col-lg-12">
            <div class="row">
                <nav class="nav navbar-nav navbar-fixed-top">
                    <div class="navbar-header">
                        <a href="index.php" target="_self" class="navbar-brand">Dashboard</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php 
                                $connect=  mysqli_connect("localhost", "root", "");
                                mysqli_select_db($connect, "simreka");
                                session_start();
                                $email=$_SESSION['email'];
                                $pass=$_SESSION['password'];

                                $select_query="select * from users where email='$email' && password='$pass'";
                                $result=  mysqli_query($connect, $select_query);
                                $row=  mysqli_fetch_assoc($result);
                                echo "<div class='profile'><h2>WELCOME </h2>"."<h3>".$row['firstName']." ".$row['lastName']."</h3>"."</div>";                                                          
                            ?>
                        </li>
                        <div class="right-div">
                            <li><a href="userprofileUpdate.php"><span class="glyphicon glyphicon-user"> Profile</span></a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
                        </div>
                    </ul>
                </nav>
            </div>
            <div id="div2">                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>EDIT PROFILE</h2>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="userprofileUpdate.php">
                            <div class="form-group">
                                <label>First Name :</label>
                                <input type="text" placeholder="Edit First Name" name="editfname" class="form-control" required="true">
                            </div>
                            <div class="form-group">
                                <label>Last Name :</label>
                                <input type="text" placeholder="Edit Last Name" name="editlname" class="form-control" required="true">
                            </div>
                            <button class="btn btn-success" name="editsubmit">Update</button>
                        </form>
                    </div>    
                </div>
                            
            </div>
        </div>
    </body>
</html>


