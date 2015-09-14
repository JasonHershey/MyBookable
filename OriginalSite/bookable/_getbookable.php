<?php
session_start();

include '../common/connection.php';

$sql = "Select id, bookablename, ownerid, typename, description, 
location_id, location_address, location_city, location_state,  
location_country, location_postalcode, location_phone, location_email,
location_longitude, locations_latitude, brand_id,
brand_name, brand_tagline, brand_address, brand_city, brand_state, 
brand_country, brand_postalcode, brand_email, brand_phone, brand_fax, brand_image, brand_addbrand, showinsearch
from reporting_bookables 
where id='".$_GET['bkblid']."';";

$bkblresults = mysqli_query($conn,$sql);
if (!$bkblresults)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$bkblresults;
    header("Location: viewbookable.php?bkblid=".$_GET['bkblid']);
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';
$bkbl_row = mysqli_fetch_assoc($bkblresults);


}
 ?> 