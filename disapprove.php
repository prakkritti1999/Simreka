<?php
    $connect=  mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "simreka");
    $email=$_GET['email'];
    
    //if the admin has disapproved the user,then no='no';
    $no='no';
    
    $approvalchk_query=  mysqli_query($connect, "select * from users_permission where email='$email'");
    $row=  mysqli_fetch_assoc($approvalchk_query);
    if($row['is_permission']==$no){
        echo '<script>alert("Dear Admin, You have already disapproved this user"); window.location="AdminLoginView.php";</script>';
    }
    elseif ($row['is_permission']=='yes') {
        echo '<script>alert("Alert!! This user has already been approved.You cant dispapprove him/her."); window.location="AdminLoginView.php";</script>';
    }
    else{
        $disapprove_query="insert into users_permission values('$email','$no')";
        $disapprove=  mysqli_query($connect, $disapprove_query);
        echo '<script>alert("User Disapproved"); window.location="AdminLoginView.php"</script>';
    }
?>
