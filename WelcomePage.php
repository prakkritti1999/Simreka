<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome Page</title>
        <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap/js/jQuery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
        
        <style>
            body{
                background-repeat: no-repeat;
                background-image: url(https://simreka.com/wp-content/uploads/2019/03/1-e1558343275979.jpg);
                background-size: cover;
                width: 100%;
                height: 100%;
                opacity: 1;
                visibility: inherit;
                z-index: 20;
            }
            .transparent{
                width: 30%;
                height: 350px;
                margin-left: 400px;
                margin-top: 150px;
                padding: 10px;
                background-color: whitesmoke;
                opacity: 0.7;
            }
            .content{
                padding: 20px;
                color: #333300;
            }
            .transparent ul li a{
                color: maroon;
                height: 50px;
                width: 200px;
                display: inline-block;
                font-size: 20px;
                
            }
            .transparent ul li:hover{
                background-color: blue;
                transform: scale(1.1,1.1);
            }
            .transparent ul li a:hover{
                color: white;
                text-decoration: none;
                height: 50px;
                width: 200px;
                display: inline-block;
            }
            .transparent ul li{
                list-style-type: none;
                height: 50px;
                width: 200px;
                text-align: center;
                background-color: darkorchid;
                opacity: 1;
                padding-bottom: 20px;
                margin-top: 10px;
                margin-left: 0px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="transparent">
                        <div class="content">
                            <h1 style="font-weight: bolder; text-decoration: underline; color: #843534">WELCOME to SIMREKA</h1>
                        <h3>Choose below to continue </h3>
                        <ul>
                            <li><a href="AdminLOGIN.php">ADMIN</a></li>
                            <li><a href="LOGIN.php">USER</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
