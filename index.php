<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoGalery</title>
</head>
<body>
<h1>Load New Pic</h1>

<!--upload--file-->
<form action="upload.php" method="post" enctype="multipart/form-data"/>
<label>Picture</label>
<input type="file" name="file" id="file"/> <br/>
<label>Title</label>
<input type="text" name="title" id="title"/> <br/>
<label>Description</label>
<textarea name="description" id="description"></textarea> <br/>
<button type="submit">enviar</button>
</form>


<!--list images-->
<?php
?>    


</body>
</html>
