<?php
session_start();

include '../common/connection.php';

$payoptquery = "Select id, paymentTypename, description, parameterConfig
From paymentTypes;";

$payoptresults = mysqli_query($conn,$payoptquery);
if (!$payoptresults)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$payoptresults;
    header("Location: viewpayoptions.php");
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';
}
 ?> 