<?php
//load and data check
include('lib.php');

//db connection
$conn = connect("localhost","fotogalery","root","");
//$conn=connect("localhost","photogalery","aguacate","aguacate");
if(!$conn ){ echo "ok";}

//form received data
$file=$_FILES['file']['name'];
$title=$_POST['title'];
$description=$_POST['description'];

//file info
$temp=$_FILES['file']['tmp_name']; // temp folder
$size=$_FILES['file']['size'];//size
$tipo=$_FILES['file']['type'];


if(!((strpos($tipo,"gif")||strpos($tipo,"jpg") || strpos($tipo,"png") && ($size < 2000000))))
{
echo "is not a pic :(";   
}
else
{
$file_name = get_random(111111,999999,$conn); 
//can't get back any value inside db, this avoid duplicated registers. 
echo $file_name;
}

?>