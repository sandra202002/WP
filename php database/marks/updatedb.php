<?php

//checking connection
$connection=new mysqli("localhost","root","","mark");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}
$sql = "UPDATE `student_mark` SET `PASS/FAIL`='Pass' WHERE `mark`>'35' ";
$sql = "UPDATE `student_mark` SET `PASS/FAIL`='Fail' WHERE `mark`<='35' ";
if($connection->query($sql)==TRUE)
{
    echo "connection succesful,table student_mark is created";
}
else
{
    echo" error creating table" .$connection->connect_error;
}
$connection->close();
?>