
<?php
$cc=new mysqli("localhost","root","");

//check conncetion
if($cc->connect_error)
{
    die("connection failed" .$c->connection_error);
}
 else
{
    echo "success";
    echo "<br>";
}
//creating a database

$s="CREATE DATABASE mark";
If($cc->query($s)===True)
{
    echo "database ccreated successfully with name mark";
}
 else
    
 {
     echo "error database:"  .$cc->error;
 }
 
 //closing connection
 $cc->close();
?>