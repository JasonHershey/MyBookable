<?php
session_start();

 ?> 
<div id='header'>
  <div id='header-title'><h1>MyBookables.com</h1></div> <div id='header-login'>
<?php
if ($_SESSION['userid']!="")
{


echo "Welcome <a href='../viewprofile.php?userid=".$_SESSION['userid']."'>".$_SESSION['username']."</a>";

echo " <a href='http://".$_SERVER['HTTP_HOST']."/mybook/logout.php'>Sign out</a>";
}
else
{
echo "<a href='http://".$_SERVER['HTTP_HOST']."/mybook/signin.php'>Sign in</a>";
}
 ?> 

</div>
    <div id='header-menu'>
      <div id='header-menu-left'><a href='../addabookable.php'>Add a bookable</a></div>
      <div id='header-menu-middle'><a href='../mybookables.php'>View my bookables</a></div>
      <div id='header-menu-right'><a href='../bookablesearch.php'>Find a bookable</a></div>
    </div>
  </div>