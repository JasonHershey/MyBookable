<?php 
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta description='' />
 <?php include '../common/script_css.txt';?>
</head>
<body>
    <?php include '../common/main-header.php';

if ($_SESSION['iserror']=='')
{
$_SESSION['iserror']='0';
}

if ($_SESSION['iserror'])
{
echo $_SESSION['errormessage'];
}


?>

<?php
if ($_GET['apoid']=='')
{
include '_createapo.txt';
}
else
{
include '_getapo.php';
include '_editapo.txt';
}
include '_insertapo.php';
?>

<script src="../common/bookable.js"></script>
</body>
</html>