?php

//checking connection
$connection=new mysqli("localhost","root","","mark");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}
//create table named as students
$c="CREATE TABLE student_mark(slno VARCHAR(20),name VARCHAR(10),subject VARCHAR(20),mark VARCHAR(10))";
if($connection->query($c)==TRUE)
{
    echo "connection succesful,table student_mark is created";
}
else
{
    echo" error creating table" .$connection->connect_error;
}
$connection->close();
?>