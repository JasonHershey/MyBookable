<?php

if (isset($_FILES['profileimage']))
        {
$temp_userid=$_SESSION['userid'];        

// make a note of the current working directory, relative to root.
$workingdirectory = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

// make a note of the directory that will recieve the uploaded file 
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . '/uploaded_files/'; 

// make a note of the location of the upload form in case we need it 
$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'updateuserprofileimage.php'; 

// make a note of the location of the success page 
$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.success.php'; 

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

        $sql = "Call update_userprofileimage(
        '$temp_userid',
        '$uploadFilename'
        );";

    $results = mysqli_query($conn,$sql);
    
    if (!$results)
        {
        $_SESSION['errormessage'] = "Query error:".mysqli_error($conn);
        $_SESSION['iserror'] ='1';
        echo "message 1";
        }
        else
        {
        $row = mysqli_fetch_row($results);
        $_SESSION['iserror'] = '0';
        $_SESSION['userupdated']='1';


}

}
else
{

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
    exit; 
} // end error handler 


 ?> 




<form enctype="multipart/form-data" name="update-user-profile-image" method="post" action="">
           <table width="100%" border="0" cellspacing="1" cellpadding="3">
            
			<tr>
                        <td>Profile image</td>
                        <td>:</td>
                        <td><input name='profileimage' type='file' id='profileimage' value='Select file'></td>
                    </tr>

  <tr>
                        <td colspan="3" align="center"><input type="submit" name="UpdateUserProfileImage" value="Update profile image"></td>
                    </tr>

</table>
</form>


