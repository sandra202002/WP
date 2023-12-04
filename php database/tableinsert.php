

<?php
//checking connection
$connection=new mysqli("localhost","root","","MCA_DEPT");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}

$stu="INSERT INTO s1mca_stud(id,sname)VALUE(9,'teena')";



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
