<?php
session_start();

include '../common/connection.php';

$ratequery = "Select id, rateName, bookables_id, bookableName, amount, periodTypename, startDate, endDate
From reporting_rates
where owner_id='".$_SESSION['userid']."'and bookables_id='".$_GET['bkblid']."';";

$rateresults = mysqli_query($conn,$ratequery);
if (!$rateresults)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$rateresults;
    header("Location: viewrates.php");
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';
}
 ?> 