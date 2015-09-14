<?php
session_start();
include 'common/connection.php';

$temp_eMail=$_POST['email'];
$temp_userpassword=$_POST['userpassword'];


$sql = "Select id,firstName,password
From siteusers
where eMail='".$temp_eMail."';";

//echo $sql;

$results = mysqli_query($conn,$sql);


if (!$results)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$results;
header("Location: signin.php");
}
else
{
$row = mysqli_fetch_row($results);
    if (password_verify($temp_userpassword,$row['2']))
    {
        $_SESSION['errormessage'] = !mysqli_error($conn);
        $_SESSION['iserror']='0';
        $_SESSION['userid']=$row['0'];
        $_SESSION['username']=$row['1'];
   
    header("Location: viewprofile.php?userid=".$row[0]);
}
else
{
    $_SESSION['errormessage'] = "Password was invalid";
    $_SESSION['iserror']='1';
    header("Location: signin.php");
}
}
 ?> 