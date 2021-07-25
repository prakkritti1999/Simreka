<?php
    $connect=  mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "simreka");
    $email=$_GET['email'];
    
    //if the admin has approved the user,then yes=1;
    $yes=1;
    
    //notifying the user that he/she has been approved by the admin
    $subject="Approval";
    $body="Hi there, You have been approved by the admin. We may now login to the system";
    $headers="From :SIMREKA";
    if(mail($email, $subject, $body,$headers)){
        $approve_query="insert into users_permission values('$email','$yes')";
        $approve=  mysqli_query($connect, $approve_query);
        echo '<script>alert("User Approved. Mail Sent"); window.location="AdminLoginView.php"</script>';
    }    
?>