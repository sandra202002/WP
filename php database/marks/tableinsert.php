

<?php
//checking connection
$connection=new mysqli("localhost","root","","mark");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}

$stu="INSERT INTO student_mark(slno VARCHAR(20),name VARCHAR(10),subject VARCHAR(20),mark VARCHAR(10))";



if($connection->query($stu)===True)
{
    echo "new record created successfully";
}
else
{
    echo" error".$stu."<br>" .$connection->error;
}
$connection->close();
?>
