<?php

//checking connection
$connection=new mysqli("localhost","root","","mark");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}
$sql= "ALTER TABLE `student_mark`ADD COLUMN `PASS/FAIL` VARCHAR(100)";
if($connection->query($sql)==TRUE)
{
    echo "connection succesful,altereration done";
}
else
{
    echo" error" .$connection->connect_error;
}
$connection->close();
?>