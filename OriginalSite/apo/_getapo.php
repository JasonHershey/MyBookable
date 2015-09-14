<?php
session_start();

include '../common/connection.php';

$apoquery = "Select `APO ID`, `APO Name`, `Payment Type ID`, `Payment Type Name`, `Bookable ID`, `Bookable Name`, `APO Config`, `Customer Default`, `Description`
From reporting_apos
where `Owner ID`='".$_SESSION['userid']."'
and `APO ID`='".$_GET['apoid']."';";

$aporesults = mysqli_query($conn,$apoquery);
if (!$aporesults)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$aporesults;
    header("Location: viewapo.php");
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';
$aporow = mysqli_fetch_array($aporesults);
}
 ?> 