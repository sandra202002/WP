
<?php

//checking connection
$connection=new mysqli("localhost","root","","bill");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}
//create table named as students
$c="CREATE TABLE generated_bill(itemname VARCHAR(20),qty VARCHAR(10),u_p VARCHAR(10))";
if($connection->query($c)==TRUE)
{
    echo "connection succesful,table generated_bill is created";
}
else
{
    echo" error creating table" .$connection->connect_error;
}
$connection->close();
?>