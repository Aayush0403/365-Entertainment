<?php
$hostname="localhost";
$username ="root";
$password="";
$dbname="tt";

$dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");
include('login.php');
// echo "you are connected to ".$dbname;
// echo "response accepted";


// $conn= new mysqli("localhost" ,"root" ,"No" ,"tt");
// if($conn->connect_error)
// {
//     die('connection failed : '.$conn->connect_error);
// }
// else{
//     $stmt=$conn->prepare("insert into gt(naam,email,psswd)  values(?,?,?)");
//     $stmt->bind_param("sss",$name,$mail,$pswd);
//     $stmt->execute();
//     echo "register sucessfully";
//     $stmt->close();
//     $conn->close();
// }
           
?>









