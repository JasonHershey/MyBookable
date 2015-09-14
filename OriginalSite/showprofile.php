<?php
session_start();

include 'common/connection.php';

if ($_SESSION['iserror'])
{
  header("Location: viewprofile.php");
} 

$sql = "Select firstName, lastName, eMail, phone, address, city, state, country, postalCode, profileImage
From siteusers
where id='".$_GET['userid']."';";

$results = mysqli_query($conn,$sql);
if (!$results)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$results;
header("Location: viewprofile.php");
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';
$row = mysqli_fetch_row($results);
$temp_fName=$row[0];
$temp_lName=$row[1];
$temp_eMail=$row[2];
$temp_phone=$row[3];
$temp_address=$row[4];
$temp_city=$row[5];
$temp_state=$row[6];
$temp_country=$row[7];
$temp_postalCode=$row[8];
$temp_profileImage=$row[9];
}
 ?> 