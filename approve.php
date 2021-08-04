<?php
    $connect=  mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "simreka");
    $email=$_GET['email'];
    
    //if the admin has approved the user,then yes='yes';
    $yes='yes';
    
    //notifying the user that he/she has been approved by the admin
    $subject="Approval";
    $body="Hi there, You have been approved by the admin. We may now login to the system";
    $headers="From :SIMREKA";
    
    $approvalchk_query=  mysqli_query($connect, "select * from users_permission where email='$email'");
    $row=  mysqli_fetch_assoc($approvalchk_query);
    if($row['is_permission']==$yes){
         echo '<script>alert("Dear Admin, You have already approved this user"); window.location="AdminLoginView.php";</script>';
     }
     else{
            mail($email, $subject, $body,$headers);
            if ($row['is_permission']=='no') {
               echo '<script>alert("Dear Admin, This user has been disapproved.Do u want to approve him/her?");</script>';
               $approval_update=  mysqli_query($connect, "update users_permission set is_permission='$yes'");
               echo '<script>alert("User Approved. Mail Sent"); window.location="AdminLoginView.php"</script>';
            }
           else {
               $approve_query="insert into users_permission values('$email','$yes')";
               $approve=  mysqli_query($connect, $approve_query);
               echo '<script>alert("User Approved. Mail Sent"); window.location="AdminLoginView.php"</script>';
            }  
        }     
?>
