<?php



$connection=new mysqli("localhost","root","","mark");

if ($connection->connect_error)
{
    die("CONNECTION FAILED".$connection->connect_error);
}

?>