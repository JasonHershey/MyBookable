<?php
session_start();
$temp_userid=$_SESSION['userid'];
$temp_fName=$_POST['fname'];
$temp_lName=$_POST['lname'];
$temp_eMail=$_POST['email'];
$temp_phone=$_POST['phone'];
$temp_address=$_POST['address'];
$temp_city=$_POST['city'];
$temp_state=$_POST['state'];
$temp_state=$_POST['country'];
$temp_postalCode=$_POST['postalcode'];
if($temp_userid=='')
{
$_SESSION['iserror'] = '1';
$_SESSION['errormessage'] = "No user identified.";
header("Location: createprofile.php");
}
else
{ 
include 'common/connection.php';
if ( $_SESSION['iserror'])
{
header("Location: createprofile.php");
} 
$sql = "Call update_siteusers(
'$temp_userid',
'$temp_fName', 
'$temp_lName', 
'$temp_eMail', 
'$temp_phone', 
'$temp_address', 
'$temp_city', 
'$temp_state',
'$temp_country',
'$temp_postalCode', 
NULL, 
NULL);";

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
$_SESSION['userupdated']='1';
header("Location: viewprofile.php");
}
//$conn->close();
}

 ?> 