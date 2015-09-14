<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$_SESSION['iserror'] = '0';
include '../common/connection.php';

$temp_aponame=htmlspecialchars($_POST['apo-name']);
$temp_bookableid=htmlspecialchars($_POST['bookable-select']);
$temp_description=htmlspecialchars($_POST['apo-description']);
$temp_apotype=htmlspecialchars($_POST['create-apo-payopt-type']);
$temp_apoconfig=htmlspecialchars($_POST['apo-configuration']);
$temp_apodefault=htmlspecialchars($_POST['apo-default']);


switch ($temp_apodefault)
{
case 'on':
$temp_apodefault=1;
break;
default:
$temp_apodefault=0;
}
$temp_userid=$_SESSION['userid'];
$temp_id=$_GET['apoid'];
if($temp_aponame=='')
{
    $_SESSION['iserror'] = '1';
    $_SESSION['errormessage'] = "Required values not set.";
}
else
{ 
    if ($_GET['apoid']=='')
{
    $message="run insert";
$apoinsertsql = "Call insert_allowedpaymentoption(
'$temp_aponame',
'$temp_apotype',
'$temp_bookableid', 
'$temp_apoconfig',
'$temp_apodefault',
'$temp_description'
);";


}
else
{
$message="run update";
$apoinsertsql = "Call update_allowedpaymentoption(
'$temp_id',
'$temp_aponame',
'$temp_apotype',
'$temp_bookableid', 
'$temp_apoconfig',
'$temp_apodefault',
'$temp_description'
);";


}
$aporesults = mysqli_query($conn,$apoinsertsql);
if (!$aporesults)
{$_SESSION['errormessage'] = "Query error:".mysqli_error($conn)." Query: ".$apoinsertsql ;
$_SESSION['iserror'] ='1';
}
else
{
$row = mysqli_fetch_row($aporesults);
//$_SESSION['userid'] = $row[0];


echo '<script>',
"window.location.href = window.location.href;",
"$('#create-table-feedback').text('Allows Payment Option ".$temp_aponame." successfully created.');",
'</script>';
$_SESSION['iserror'] = '0';
}
//$conn->close();
}

    // The following function is an error handler which is used 
    // to output an HTML error page if the file upload fails 
    function error($error, $location, $seconds = 5) 
        { 
        $_SESSION['iserror'] = '1';   
        $_SESSION['errormessage']='    <div id="Upload">'. 
            '        <h1>Upload failure</h1>'. 
            '        <p>An error has occurred: '. 
            '        <span class="red">' . $error . '...</span>'. 
            '        The upload form is reloading</p>'. 
            '     </div>'."nn"; 

        } // end error handler 
}
 ?> 