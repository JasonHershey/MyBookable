<?php 
session_start();
if  ($_SESSION['iserror'])
{
}
else
{
include 'showprofile.php';
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta description='' />

    <link rel='stylesheet' href='mybookables.css' />
</head>
<body>
   <?php 
include 'common/main-header.php';

?>

<h2>Sign-in</h2>

 <table width="300" border="0" align="left" cellpadding="0" cellspacing="1">
 <tr>
 <td><form name="user-signin-form" method="post" action="login.php">
 <table width="100%" border="0" cellspacing="1" cellpadding="3">
 <tr>
 <td width="71">*Email</td>
 <td width="6">:</td>
 <td width="301">
<?php
if ($_SESSION['userid']=='')
{
echo "<input name='email' type='text' id='email'>";
$_SESSION['usercreatefailed']='0';
}
else
{
echo $_SESSION['username']." is already logged in";
}
?>
</td>
 </tr>
<tr>
 <td>*Password</td>
 <td>:</td>
 <td>
<?php
if ($_SESSION['userid']=='')
{
echo "<input name='userpassword' type='text' id='userpassword'>";
}
else
{

}
?>
</td>
 </tr>
<?php
if ($_SESSION['iserror'])
{
echo "<tr>
 <td colspan='3' align='center'><p>All fields must be completed</p><p>".$_SESSION['errormessage']."</p></td>
 </tr>";

}
elseif ($_SESSION['signinerror'])
{
echo "<tr>
 <td colspan='3' align='center'><p>Sign in failed. Check your password or use name</p><p>".$_SESSION['errormessage']."</p></td>
 </tr>";

}
else
{$_SESSION['iserror'] = '0';
}
?>
<tr>
 <td colspan="3" align="center"><input type="submit" name="signin" value="Sign in"></td>
 </tr>
 </table>
</form>
 </td>
 </tr>
<tr>
<td colspan='3'><a href='createprofile.php'>Not registered? Create an account</a></td>
</tr>
<tr>
<td colspan='3'><a href='resetpassword.php'>Reset password</a></td>
</tr>

 </table>

</body>
</html>