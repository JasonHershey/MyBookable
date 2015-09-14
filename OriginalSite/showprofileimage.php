<?php
session_start();
include 'common/connection.php';

$sql = "Select profileImage
From siteusers
where id='".$_GET['userid']."';";

$results = mysqli_query($conn,$sql);
if (!$results)
{
 $_SESSION['errormessage'] =  mysqli_error($conn);
 $_SESSION['iserror'] = !$results;
echo '/uploaded_files/55983afde53e5.jpg';
}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';
$row = mysqli_fetch_row($results);
echo "<img width='100%' src='".str_replace('/home/mybookab/public_html','',$row[0])."' />";

}
?>