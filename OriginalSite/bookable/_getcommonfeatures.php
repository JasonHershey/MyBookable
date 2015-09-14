<?php
session_start();

include '../common/connection.php';

$featurequery = "Select `Feature ID`, `Feature type ID`, `Feature type`, `Feature name`, `Feature value`
From reporting_bookablefeatures
where `Owner ID`='".$_SESSION['userid']."'and `Bookable ID`='".$_GET['bkblid']."';";

$featureresults = mysqli_query($conn,$featurequery);
if (!$featureresults)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$featureresults;
    header("Location: viewbookable.php");
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';

while ($row = mysqli_fetch_array($featureresults))
{
switch ($row['Feature name'])
{
case 'place-non-smoking':
$place_non_smoking=$row['Feature value'];
break;
case 'place-ada-accessible';
$place_ada_accessible=$row['Feature value'];
break;
case 'place-wifi-available';
$place_wifi_available=$row['Feature value'];
break;
case 'place-insurance-required';
$place_insurance_required=$row['Feature value'];
break;
case 'place-capacity';
$place_capacity=$row['Feature value'];
break;
case 'place-size';
$place_size=$row['Feature value'];
break;
case 'place-type';
$place_type=$row['Feature value'];
break;
case 'person-trainer';
$person_trainer=$row['Feature value'];
break;
case 'person-entertainer';
$person_entertainer=$row['Feature value'];
break;
case 'person-therapist';
$person_therapist=$row['Feature value'];
break;
case 'thing-tools';
$thing_tools=$row['Feature value'];
break;
case 'thing-ip';
$thing_ip=$row['Feature value'];
break;
case 'thing-vehicle';
$thing_vehicle=$row['Feature value'];
break;
default:
    switch($row['Feature name'])
    {
    case 'feature1':
    $customfeature1=$row['Feature value'];
    break;
    case 'feature2':
    $customfeature2=$row['Feature value'];
    break;
    case 'feature3':
    $customfeature3=$row['Feature value'];
    break;
    case 'feature4':
    $customfeature4=$row['Feature value'];
    break;
    case 'feature5':
    $customfeature5=$row['Feature value'];
    break;
    case 'feature6':
    $customfeature6=$row['Feature value'];
    break;
    case 'feature7':
    $customfeature7=$row['Feature value'];
    break;
    case 'feature8':
    $customfeature8=$row['Feature value'];
    break;
    
    }

}

}

}
 ?> 