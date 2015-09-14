<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta description='' />

    <link rel='stylesheet' href='mybookables.css' />
</head>
<body>
   
<?php 
	include 'main-header.php';
?>

<h2><?php echo $temp_fName." ".$temp_lName; ?></h2>

 <table id='view-profile-table'>
 <tr>
	<td><b>Address</b></td>
	<td></td>
	<td>
		<?php echo $temp_address; ?>
		<br/>
		<?php echo $temp_city.", ".$temp_state." ".$temp_postalCode; ?>
		<br/>
	</td>
	<td rowspan='2'><?php echo "<img src='".$temp_profileImage."'/>"; ?></td>
 </tr>
 <tr>
	<td><b>Contact:</b></td>
	<td></td>
	<td>
		<?php echo $temp_eMail; ?>
		<br/>
		<?php echo $temp_phone; ?>
		<br/>
	</td>
 </tr>
</table>

<?php
include 'edit_profile.txt';
?>

</body>
</html>