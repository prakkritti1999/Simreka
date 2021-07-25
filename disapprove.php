<?php
    $connect=  mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "simreka");
    $email=$_GET['email'];
    
    //if the admin has disapproved the user,then no=0;
    $no=0;
    $disapprove_query="insert into users_permission values('$email','$no')";
    $disapprove=  mysqli_query($connect, $disapprove_query);
    echo '<script>alert("User Disapproved"); window.location="AdminLoginView.php"</script>';
?>