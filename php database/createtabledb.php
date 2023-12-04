
<?php

//checking connection
$connection=new mysqli("localhost","root","","MCA_DEPT");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}
//create table named as students
$c="CREATE TABLE s1mca_stud(id INT(1),sname VARCHAR(20))";
if($connection->query($c)===TRUE)
{
    echo "connection succesful, table student is created";
}
else
{
    echo" error creating table" .$connection->connect_error;
}
$connection->close();
?>