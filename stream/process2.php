<?php

$hostname="localhost";
$username ="root";
$password="";
$dbname="tt";

$dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");

if($_SERVER['REQUEST_METHOD']=='POST')
{
   $namel=$_POST['namelog'];
   $pswdl=$_POST['passlog'];

       $result= mysqli_query($dbc,"SELECT * FROM ft WHERE NAME='$namel' AND PASSWORD='$pswdl'");
       $count=mysqli_num_rows($result);
       if($count>0)
       {
        include('index.php');
       }

       else
       {
        echo "incorrect credentials";
       }
}
else
{
    echo "wrong credentials";
}



?>