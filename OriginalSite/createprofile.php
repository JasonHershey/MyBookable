<?php 
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta description='' />

    <link rel='stylesheet' href='mybookables.css' />
</head>
<body>
    <?php include 'common/main-header.php';

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
include 'create_profile.txt';
?>

</body>
</html>