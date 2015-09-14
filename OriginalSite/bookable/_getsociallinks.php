<?php
session_start();

include '../common/connection.php';

$linkquery = "Select `Link ID`, `Link name`, `Link URL`
From reporting_sociallinks
where `Owner ID`='".$_SESSION['userid']."'and `Source ID`='".$_GET['bkblid']."';";

$linkresults = mysqli_query($conn,$linkquery);
if (!$linkresults)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$linkresults;
    header("Location: viewbookable.php");
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';

while ($row = mysqli_fetch_array($linkresults))
{
switch ($row['Link name'])
{
case 'facebook':
$facebook_link=$row['Link URL'];
break;
case 'linkedin';
$linkedin_link=$row['Link URL'];
break;
case 'twitter';
$twitter_link=$row['Link URL'];
break;
case 'google';
$google_link=$row['Link URL'];
break;
case 'vtour';
$vtour_link=$row['Link URL'];
break;

}

}

}
 ?> 