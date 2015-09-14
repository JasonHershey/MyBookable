<?php
session_start();
 htmlspecialchars($uname);
$temp_fName=htmlspecialchars($_POST['fname']);
$temp_lName=htmlspecialchars($_POST['lname']);
$temp_eMail=htmlspecialchars($_POST['email']);
$temp_userpassword=htmlspecialchars($_POST['userpassword']);
$temp_passwordconfirm=htmlspecialchars($_POST['passwordconfirm']);
$temp_accepttos=htmlspecialchars($_POST['tosaccept']);

if($temp_fName=='' OR $temp_lName=='' OR $temp_eMail=='' OR $temp_userpassword=='' OR ($temp_userpassword != $temp_passwordconfirm))
{
$_SESSION['iserror'] = '1';
$_SESSION['errormessage'] = "Required values not set.";
header("Location: createprofile.php");
}
else
{ 
include 'common/connection.php';

if ( $_SESSION['iserror'])
    {
    header("Location: createprofile.php");
    } 

$temp_userpassword=password_hash($temp_userpassword,PASSWORD_DEFAULT);

$sql = "Call insert_siteusers(
'$temp_fName', 
'$temp_lName', 
'$temp_eMail', 
NULL, 
NULL, 
NULL, 
NULL, 
NULL, 
NULL, 
NULL, 
'$temp_userpassword');";

$results = mysqli_query($conn,$sql);
if (!$results)
{$_SESSION['errormessage'] = "Query error:".mysqli_error($conn);
$_SESSION['iserror'] ='1';
header("Location: createprofile.php");
}
else
{
$row = mysqli_fetch_row($results);
$_SESSION['userid'] = $row[0];
$_SESSION['iserror'] = '0';
header("Location: viewprofile.php?userid=".$row[0]);
}
//$conn->close();
}


 ?> 