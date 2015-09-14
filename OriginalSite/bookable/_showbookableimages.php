<?php

include '../common/connection.php';

$imagearray = array("","","","","","");

$sql2 = "select primaryImage, imageFile from bookableImages where bookables_id='".$_GET['bkblid']."';";

$results2 = mysqli_query($conn,$sql2);

if (!$results2)
{

echo $sql2;
echo $results2;

}
else
{
$_SESSION['errormessage'] = !mysqli_error($conn);
$_SESSION['iserror'] = '0';

$x=0;
while ($row = mysqli_fetch_array($results2))
    {
    if ($row['primaryImage'])
        {
        $temp_primaryimage=$x;
        }
        $imagearray[$x]=$row['imageFile'];
        $x++;


    }
 
}
?>

<table>
<tr><td colspan='3'>
<? 
if ($imagearray[$temp_primaryimage]!='')
{ echo "<img width='400px' src='".str_replace('/home/mybookab/public_html','',$imagearray[$temp_primaryimage])."' />"; }
?>
</td></tr>
<tr>
<? 
for ($x=0; $x <=2;$x++)
{
if ($imagearray[$x] !='')
    { echo "<td><img width='100px' src='".str_replace('/home/mybookab/public_html','',$imagearray[$x])."' /></td>"; }
else
    { echo "<td> </td>"; }
}
?>
</tr>
<tr>
<? 
for ($x=3; $x <=5;$x++)
{
if ($imagearray[$x] !='')
    { echo "<td><img width='100px' src='".str_replace('/home/mybookab/public_html','',$imagearray[$x])."' /></td>"; }
else
    { echo "<td> </td>"; }
}
?>
</tr>
</table>
