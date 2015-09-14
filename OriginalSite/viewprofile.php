<?php 
session_start();
if  ($_SESSION['iserror'])
{
}
else
{
include 'showprofile.php';
include 'view_profile.txt';
if ($_GET['userid']==$_SESSION['userid'])
{
include 'edit_profile.txt';
}
}

?>
