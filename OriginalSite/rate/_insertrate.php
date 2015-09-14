<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$_SESSION['iserror'] = '0';
include '../common/connection.php';

$temp_ratename=htmlspecialchars($_POST['rate-name']);
$temp_bookableid=htmlspecialchars($_POST['bookable-select']);
$temp_description=htmlspecialchars($_POST['ratedescription']);
$temp_rate=htmlspecialchars($_POST['rate-input']);
$temp_period=htmlspecialchars($_POST['rateperiodinput']);
$temp_minimumperiod=htmlspecialchars($_POST['rateminimuminput']);
$temp_startdate=htmlspecialchars($_POST['create-rate-start-date']);
$temp_enddate=htmlspecialchars($_POST['create-rate-end-date']);
$temp_monstart=htmlspecialchars($_POST['create-rate-start-mondays']); 
$temp_monend=htmlspecialchars($_POST['create-rate-end-mondays']);  
$temp_tuestart=htmlspecialchars($_POST['create-rate-start-tuesdays']);  
$temp_tueend=htmlspecialchars($_POST['create-rate-end-tuesdays']);  
$temp_wedstart=htmlspecialchars($_POST['create-rate-start-wednesdays']);  
$temp_wedend=htmlspecialchars($_POST['create-rate-end-wednesdays']);  
$temp_thustart=htmlspecialchars($_POST['create-rate-start-thursdays']);  
$temp_thuend=htmlspecialchars($_POST['create-rate-end-thursdays']);  
$temp_fristart=htmlspecialchars($_POST['create-rate-start-fridays']);  
$temp_friend=htmlspecialchars($_POST['create-rate-end-fridays']); 
$temp_satstart=htmlspecialchars($_POST['create-rate-start-saturdays']);  
$temp_satend=htmlspecialchars($_POST['create-rate-end-saturdays']);  
$temp_sunstart=htmlspecialchars($_POST['create-rate-start-sundays']);  
$temp_sunend=htmlspecialchars($_POST['create-rate-end-sundays']); 


switch ($temp_period)
{
case '1':
    $temp_period='02b5a237-3a73-11e5-9c9b-549f350764bc';
break;
case '2':
    $temp_period='0981be01-3a73-11e5-9c9b-549f350764bc';
break;
case '3':
    $temp_period='bd5a2289-3a72-11e5-9c9b-549f350764bc';
break;
case '4':
    $temp_period='f9369f9a-3a72-11e5-9c9b-549f350764bc';
break;
case '5':
    $temp_period='fd4b0541-3a72-11e5-9c9b-549f350764bc';
break;
default:
$_SESSION['iserror'] = '1';

}



$temp_userid=$_SESSION['userid'];
$temp_id=$_GET['rateid'];
if($temp_ratename=='')
{
$_SESSION['iserror'] = '1';
$_SESSION['errormessage'] = "Required values not set.";
}
else
{ 
if ($_GET['rateid']=='')
{
$message="run insert";
$rateinsertsql = "Call insert_rate(
'$temp_ratename', 
'$temp_userid',
'$temp_bookableid', 
'$temp_rate', 
'$temp_period', 
'$temp_minimumperiod',
'$temp_description', 
'$temp_startdate', 
'$temp_enddate', 
'$temp_monstart', 
'$temp_monend', 
'$temp_tuestart',
'$temp_tueend',
'$temp_wedstart',
'$temp_wedend',
'$temp_thustart',
'$temp_thuend',
'$temp_fristart',
'$temp_friend',
'$temp_satstart',
'$temp_satend',
'$temp_sunstart',
'$temp_sunend'
);";
}
else
{
$message="run update";
$rateinsertsql = "Call update_rate(
'$temp_id',
'$temp_ratename', 
'$temp_userid',
'$temp_bookableid', 
'$temp_rate', 
'$temp_period', 
'$temp_minimumperiod',
'$temp_description', 
'$temp_startdate', 
'$temp_enddate', 
'$temp_monstart', 
'$temp_monend', 
'$temp_tuestart',
'$temp_tueend',
'$temp_wedstart',
'$temp_wedend',
'$temp_thustart',
'$temp_thuend',
'$temp_fristart',
'$temp_friend',
'$temp_satstart',
'$temp_satend',
'$temp_sunstart',
'$temp_sunend'
);";


}
$rateresults = mysqli_query($conn,$rateinsertsql);
if (!$rateresults)
{$_SESSION['errormessage'] = "Query error:".mysqli_error($conn)." Query: ".$rateinsertsql ;
$_SESSION['iserror'] ='1';
}
else
{
$row = mysqli_fetch_row($rateresults);
//$_SESSION['userid'] = $row[0];


echo '<script>',
"window.location.href = window.location.href;",
"$('#create-rate-table-feedback').text('Rate ".$temp_ratename." successfully created.');",
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