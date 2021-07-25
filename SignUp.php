<?php
    $connect=  mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "simreka");
    session_start();
    
    $error=' ';
    if(isset($_POST['signUp'])){
        
        //DECLARING THE VARIABLES
        $_SESSION['firstName']=$_POST['fname'];
        $_SESSION['lastName']=$_POST['lname'];
        $_SESSION['email']=$_POST['email'];
        $reasons=$_POST['reasons'];
        $org=$_POST['org'];
        
        //INITIALIZING THE SESSION VARIABLES
        $fname=$_SESSION['firstName'];
        $lname=$_SESSION['lastName'];
        $email=$_SESSION['email'];
        
        $validations="select * from users where email='$email'";
        $result= mysqli_query($connect, $validations);
        $row= mysqli_fetch_assoc($result);
        
        if($row['email']==$email){
           $error='User already exists';
        }
        else{
            //CONFIRMING EMAIL AND GENERATING PASSWORD FOR USER
            $pass=$fname.$lname.'1234';
            $subject="COnfirmation and Password Generation";
            $body="HELLO...  ".$fname.$lname."  You have been successfully signed up for SIMREKA.Your password is  ".$pass." You may reset it later ";
            $headers="From: The Company";
            
            if(mail($email, $subject, $body,$headers)){
                $insert_query="insert into users values (default,'$email','$fname','$lname','$org','$reasons','$pass')";
                mysqli_query($connect, $insert_query);
                echo '<script>alert("Mail Sent. User Registered Successfully!!You may login now.");window.location="LOGIN.php"</script></h2>';
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SignUp for Simreka</title>
        <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap/js/jQuery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            #div2{
                margin-top: 50px;
                margin-left: 300px;
                width: 500px;
                padding-top:  20px;
                padding-bottom: 20px;
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
            button{background-color: #007848;color: white;}
            .btn:hover{
                color: white;
                text-decoration: none;
            }
            .error{
                color: red;
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container" id="div2">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 id="h2">SignUp for <b>Simreka</b></h2>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="SignUp.php">
                                <div class="form-group">
                                    <label>First Name :</label>
                                    <input type="text" placeholder="Enter First Name" name="fname" required="true" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name :</label>
                                    <input type="text" placeholder="Enter Last Name" name="lname"  required="true" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>EmailID :</label>
                                    <input type="email" placeholder="Enter Email ID" name="email" required="true" class="form-control">  
                                    <div class="error"><?php echo $error;?></div>
                                </div>
                                <div class="form-group">
                                    <label>Organization :</label>
                                    <input type="text" name="org" placeholder="Enter Organization Name" required="true" class="form-control">  
                                    
                                </div>
                                <div class="form-group">
                                    <label>Reason for requesting data access</label>
                                    <textarea name="reasons" required="true" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-block" name="signUp">SIGN UP</button>
                            </form>
                        </div>    
                    </div>          
                </div>
            </div>
        </div>
    </body>
</html>