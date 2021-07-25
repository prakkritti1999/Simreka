
                                                                                           
                       
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Login View</title>
        <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap/js/jQuery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">        
        <style>
            ul li a{
                color: grey;
                height: 50px;
                width: 200px;
                display: inline;
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
            table{
                margin-top: 80px;
            }
            table caption{
                color: darkkhaki;
            }
            .btn-success{border-color: green;}
            .btn-danger{border-color: red; margin-left: 20px;}
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
                    <div class="col-lg-9">                        
                        <table class="table table-hover table-responsive">
                            <caption><h2>Below are the registered users :</h2></caption>
                            <thead>
                                <tr>
                                    <td>Email ID</td>
                                    <td>Organization</td>
                                    <td>Reasons</td>
                                    <td>Approve/Disapprove</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $connect= mysqli_connect("localhost", "root", "");
                                    mysqli_select_db($connect,"simreka");
                                    session_start();

                                    $userselect_query="select * from users";
                                    $query=mysqli_query($connect, $userselect_query);

                                    while ($result= mysqli_fetch_array($query)){
                                ?>  
                                <tr>
                                    <td><?php echo $result['email'];?></td>
                                    <td><?php echo $result['organization'];?></td>
                                    <td><?php echo $result['reasons'];?></td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="Approve" href="approve.php?email=<?php echo $result['email'];?>"><button class="glyphicon glyphicon-ok btn-success"></button></a>
                                        <a data-toggle="tooltip" data-bs-placement="right" title="Disapprove" href="disapprove.php?email=<?php echo $result['email'];?>"><button class="glyphicon glyphicon-remove btn-danger"></button></a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>
