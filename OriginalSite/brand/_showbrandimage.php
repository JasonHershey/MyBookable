<?php
session_start();

if ($temp_profileimage!='')
{
echo "<img width='100%' src='".str_replace('/home/mybookab/public_html','',$temp_profileimage)."' />";
}

?>