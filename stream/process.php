<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
   $name=$_POST['username'];
   $mail=$_POST['email-id'];
   $pswd=$_POST['password'];

    if((!empty($name)and !empty($mail) and !empty($pswd)))
    {
       include('connect.php');
       
        $result= mysqli_query($dbc,"SELECT * FROM ft WHERE NAME='$name' AND PASSWORD='$pswd' AND EMAIL ='$mail'");
        $count=mysqli_num_rows($result);
        if($count>0)
        {
          echo "User already exists";
        }
        else
        {
         mysqli_query($dbc,"INSERT INTO ft(NAME,EMAIL,PASSWORD) VALUES('$name','$mail','$pswd')");
        }

    }
    else{
        echo "ERROR"."please fill all the values";
    }

}
else
{
    echo "no form submitted";
}

?>