<?php
$mysqli= new mysqli("localhost","root","V4Vendetta","test");
if ($mysqli->errno)
{
    echo "connection error: ".$mysqli->connect_error;

}
/*
$query="select username,password from users";
if ($result=$mysqli->query($query))
{
   while($row=$result->fetch_assoc())
    {
        echo $row['username']." :".$row['password'];
    }
}
*/
?>