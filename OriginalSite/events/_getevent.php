<?php
session_start();

include '../common/connection.php';

$eventquery = "Select id, rateName, bookables_id, bookableName, amount, periodTypes_id, periodTypename, minimumPeriods, description, startDate, endDate,
monStart, monEnd, tueStart, tueEnd, wedStart, wedEnd, thuStart, thuEnd, friStart, friEnd, satStart, satEnd, sunStart, sunEnd
From reporting_rates
where owner_id='".$_SESSION['userid']."'
and id='".$_GET['rateid']."';";

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
$raterow = mysqli_fetch_array($rateresults);
}
 ?> 