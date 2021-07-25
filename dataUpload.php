<?php
$connect=  mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "simreka");
session_start();

if(isset($_POST['upload'])){
    
    $orgname=$_POST['orgname'];
    $monrev=$_POST['monrev'];
    $noemp=$_POST['noemp'];
    $adname=$_POST['adname'];
    
    $upload_query=  mysqli_query($connect, "insert into admindataupload values ('$orgname','$monrev','$noemp','$adname')");
    echo '<script>alert("Data Uploaded Successfully"); window.location="AdminLoginView.php";</script>';
}


?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Data Upload View</title>
        <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap/js/jQuery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">        
        <style>
            ul li a{
                color: grey;
                height: 50px;
                width: 200px;
                display: inline-block;
                padding-bottom: 15px;
                font-size: 15px;
                
            }
            ul li:hover{
                background-color: blue;
                transform: scale(1.1,1.1);
            }
            ul li a:hover{
                color: white;
                text-decoration: none;
                height: 50px;
                width: 200px;
                display: inline-block;
            }
            span{
                padding-right: 10px;   
            }
            .list-div{
                margin-top: 100px;
                position: absolute;
            }
            ul li{
                list-style-type: none;
                height: 50px;
                width: 200px;
                background-color: black;
                padding: 20px;
                margin-top: 10px;
                margin-left: 0px;
            }
            #div2{
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
        </style>
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="list-div col-lg-3">
                    <ul>
                        <li><a href="AdminLoginView.php"><span class="glyphicon glyphicon-list"></span>User List</a></li>
                        <li><a href="dataUpload.php"><span class="glyphicon glyphicon-upload"></span>Data Upload</a></li>
                    </ul>
                    </div>
                    <div class="col-lg-9" id="div2"> 
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>Upload Data</h2>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="dataUpload.php">
                                    <div class="form-group">
                                        <label>Organization Name :</label>
                                        <input type="text" name="orgname" class="form-control" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Monthly Revenue :</label>
                                        <input type="text" name="monrev" class="form-control" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>No.of Employees :</label>
                                        <input type="number" name="noemp" class="form-control" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Admin Name :</label>
                                        <input type="text" name="adname" class="form-control" required="true">
                                    </div>
                                    <button class="btn btn-success" name="upload">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>