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
            <div class="row col-lg-6 data-div">
                <h3>Organization's Data is as below</h3>
                <table class=" table table-bordered table-responsive table-responsive">
                    <thead style="font-weight: bolder">
                        <tr>
                            <td>Organization Name</td>
                            <td>Monthly Income</td>
                            <td>No. of Employees</td>
                            <td>Admin Name</td>
                        </tr>
                    </thead>
                    <tbody style="color: green; ">
                        <?php
                            $upload_query=  mysqli_query($connect, "select * from admindataupload");
                            while($res=  mysqli_fetch_array($upload_query)){
                        ?>        
                        <tr>
                            <td><?php echo $res['OrganizationName'];?></td>
                            <td><?php echo $res['Monthly_Revenue'];?></td>
                            <td><?php echo $res['No._of_emp'];?></td>
                            <td><?php echo $res['adminName'];?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
