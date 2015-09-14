<?php
session_start();

include '../common/connection.php';

$sql = "Select brandName, ownerID, tagLine, address, city, state, country, postalCode,eMail, phone, fax, profileImage, addBrand
From brands
where id='".$_GET['brandid']."';";

$results = mysqli_query($conn,$sql);
if (!$results)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$results;
    header("Location: viewbrand.php?brandid=".$_GET['brandid']);
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';
$row = mysqli_fetch_row($results);

$_SESSION['brandid']=$_GET['brandid'];
$temp_brandid=$_GET['brandid'];
$temp_brandname=$row[0];
$temp_ownerid=$row[1];
$temp_tagline=$row[2];
$temp_address=$row[3];
$temp_city=$row[4];
$temp_state=$row[5];
$temp_country=$row[6];
$temp_postalcode=$row[7];
$temp_email=$row[8];
$temp_phone=$row[9];
$temp_fax=$row[10];
$temp_profileimage=$row[11];
$temp_addbrand=$row[12];

}
 ?> 