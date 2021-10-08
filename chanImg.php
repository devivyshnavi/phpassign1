<?php
if(isset($_POST["sub"])){
    $tmp=$_FILES["att"]["tmp_name"];
    $fname=$_FILES["att"]["name"];
    $ext=pathinfo($fname,PATHINFO_EXTENSION);
    $fn=$mail.".".$ext;
    if(is_dir("users/$mail")){
        if(!empty($tmp)){
            $dest="users/".$mail."/";
    if(move_uploaded_file($tmp,$dest.$fn)){
       
           }
    }
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
        .bg{
            background-color: black;
            text-align: center;
            padding: 18%;
            height: 90vh;
            background-size: cover;
            color:white;
            font-weight: bold;
 }
        </style>
    </head>
<body>
    <form method="post" enctype="multipart/form-data">
    <div class="bg">
        <h1 class="pb-3">Change Image</h1>
   <h4> Image:&nbsp;<input type="file" name="att"></h4>
   <br/>
    <input type="submit" name="sub" class="btn btn-success" value="submit">
    </div>
</form>
</body>
</html>