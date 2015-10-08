<?php
session_start();
// Create connection
//$conn = mysql_connect('localhost','root','') or die (mysql_error);
//$db=mysql_select_db('starbucks', $conn) or die (mysql_error);
//$conn = new mysqli('localhost','root','', 'starbucks');
//if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 

if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("starbucks"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

$siteurl = "http://localhost/survey/trunk/";
?>