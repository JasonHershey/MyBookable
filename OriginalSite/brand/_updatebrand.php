<?php
session_start();
include '../common/connection.php';

if (isset($_FILES['profileimage']) and $_FILES['profileimage']!='')
        {
        // make a note of the current working directory, relative to root.
        $workingdirectory = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

        // make a note of the directory that will recieve the uploaded file 
        $uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . '/uploaded_files/'; 

        // make a note of the location of the upload form in case we need it 
        $uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . '_updatebrand.php'; 


        // possible PHP upload errors 
        $errors = array(1 => 'php.ini max file size exceeded', 
                2 => 'html form max file size exceeded', 
                3 => 'file upload was only partial', 
                4 => 'no file was attached'); 

        // check for PHP's built-in uploading errors 
        ($_FILES['profileimage']['error'] == 0) 
        or error($errors[$_FILES['profileimage']['error']], $uploadForm); 

        // check that the file we are working on really was the subject of an HTTP upload 
        @is_uploaded_file($_FILES['profileimage']['tmp_name']) 
        or error('not an HTTP upload', $uploadForm); 

        // validation... since this is an image upload script we should run a check   
        // to make sure the uploaded file is in fact an image. Here is a simple check: 
        // getimagesize() returns false if the file tested is not an image. 
        @getimagesize($_FILES['profileimage']['tmp_name']) 
        or error('only image uploads are allowed', $uploadForm); 

        $temp_profileImage=file_get_contents($_FILES['profileimage']['tmp_name']);
        $temp_profileImage=mysqli_real_escape_string($conn,$temp_profileImage);

        // make a unique filename for the uploaded file and check it is not already 
        // taken... if it is already taken keep trying until we find a vacant one 
        $filename=uniqid();
        while(file_exists($uploadFilename = $uploadsDirectory.$filename.'.jpg')) 
            { 
                $filename=uniqid();
            } 

        // now let's move the file to its final location and allocate the new filename to it 
        @move_uploaded_file($_FILES['profileimage']['tmp_name'], $uploadFilename) 
        or error('Receiving directory insufficient permission', $uploadForm); 




}
else
{
$uploadFilename='';
}



$temp_brandid=$_SESSION['brandid'];
$temp_brandname=htmlspecialchars($_POST['brandname']);
$temp_tagline=htmlspecialchars($_POST['tagline']);
$temp_email=htmlspecialchars($_POST['email']);
$temp_address=htmlspecialchars($_POST['address']);
$temp_city=htmlspecialchars($_POST['city']);
$temp_state=htmlspecialchars($_POST['state']);
$temp_postalcode=htmlspecialchars($_POST['postalcode']);
$temp_phone=htmlspecialchars($_POST['phone']);
$temp_fax=htmlspecialchars($_POST['fax']);
$temp_showbrand=htmlspecialchars($_POST['showbrand']);
$temp_profileimage=$uploadFilename;
$temp_userid=$_SESSION['userid'];

if($temp_brandname=='')
{
$_SESSION['iserror'] = '1';
$_SESSION['errormessage'] = "Required values not set.";
header("Location: createbrand.php?brandid=".$temp_brandid);
}
else
{ 
if ( $_SESSION['iserror'])
    {
header("Location: viewbrand.php?brandid=".$temp_brandid);
    } 

$sql = "Call update_brand(
'$temp_brandid',
'$temp_userid',
'$temp_brandname', 
'$temp_tagline', 
'$temp_address', 
'$temp_city', 
'$temp_state', 
'',
'$temp_postalcode', 
'$temp_email', 
'$temp_phone', 
'$temp_fax', 
'$temp_addbrand',
'$temp_profileimage'
);";

$results = mysqli_query($conn,$sql);
if (!$results)
{
$_SESSION['errormessage'] = "Query error:".mysqli_error($conn);
$_SESSION['iserror'] ='1';
header("Location: viewbrand.php?brandid=".$temp_brandid);
}
else
{
$row = mysqli_fetch_row($results);
//$_SESSION['userid'] = $row[0];
$_SESSION['iserror'] = '0';
header("Location: viewbrand.php?brandid=".$temp_brandid);
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

 ?> 