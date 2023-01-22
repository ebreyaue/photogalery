<?php
function connect($srv,$db,$usr,$pass)
{
return mysqli_connect($srv,$usr,$pass,$db);
}


//find at db
function search_photo_id($conn,$id)
{
    $query="SELECT photo_id from post";
    $res=mysqli_query($conn,$query,MYSQLI_USE_RESULT);
    if(!$res){echo "error";}
    
    while($row = mysqli_fetch_row($res))
    {
    if($row[0] == $id){return true;}
    }

}

//get rand number and check if exist at register
function get_random($x,$y,$conn)
{


$id_pic = mt_rand($x,$y);
//call to db and check the register
while(search_photo_id($conn,$id_pic)==true)
{
$id_pic = mt_rand($x,$y);
}

mysqli_close($conn);    
return $id_pic;
}



?>