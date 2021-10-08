<?php
include("capt.php");
$mErr=$imgErr="";
if(isset($_POST["sub"])){
$email=$_POST["mail"];
$pswd=$_POST["pass"];
$cpswd=$_POST["cpass"];
$uname=$_POST["uname"];
$age=$_POST["age"];
$gend=@$_POST["gen"];
$tmp=$_FILES["att"]["tmp_name"];
$fname=$_FILES["att"]["name"];
$ext=pathinfo($fname,PATHINFO_EXTENSION);
$fn=$email.".".$ext;
if(empty($email)||empty($pswd)||empty($cpswd)||empty($uname)||empty($age)||empty($gend)||empty($fname)){
    $mErr="Please fill all the fields";
}
else{
    if(is_dir("users/$email")){
        $mErr="User already exists";
    }
    else{
        $mErr="";
        if($_POST["cap"]==$_POST["capsum"]){
            if(!empty($tmp)){
                if($ext=="jpg" || $ext=="jpeg" || $ext=="pdf" || $ext=="png"){
            mkdir("users/".$email);
                if($pswd==$cpswd){
                $pswd=substr(sha1($pswd),0,10);
                $fo=fopen("users/".$email."/details.txt","w");
            
                    $dest="users/".$email."/";
                if(move_uploaded_file($tmp,$dest.$fn)){
                    fwrite($fo,$pswd."\n".$uname."\n".$age."\n".$gend."\n".$cpswd);
                }
                else{
                    $imgErr="File Uploaded error";
                }
            }
            else{
                $mErr="Password not matched";
            }
        }
        else{
            $imgErr="Only image files are allowed";
        }
    }
}
    else{
        $mErr="Invalid captcha";
    }

    if($imgErr=="" && $mErr==""){
        header("location:welcome.php?uid=$email");
    }
    
}

}
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
       .bgim{
           background-image: url("reg.webp");
           background-size: cover;
           height: 100vh;
           color:white;
           font-weight: bold;
       }
       .headd{
           color:crimson;
       }
   </style>
    </head>
    <body class="text-center">
        <form method="post" enctype="multipart/form-data">
        <div class="bgim p-5">
            <h1 class="headd">Registration</h1>
            <div class="form-group pt-5">
        Email: <input type="email" name="mail" placeholder="Mail-Id">
        </div>
        <div class="form-group">
        Password: <input type="password" name="pass" placeholder="Password">
        </div>
        <div class="form-group">
       Confirm Password: <input type="password" name="cpass">
        </div>
        <div class="form-group">
        Name: <input type="text" name="uname">
        </div>
        <div class="form-group">
        Age: <input type="text" name="age">
        </div>
        <div class="form-group">
        Gender &nbsp;&nbsp; 
        Male:<input type="radio" name="gen" value="Male">
        FeMale:<input type="radio" name="gen" value="Female">
        </div>
        <div>
        Image <input type="file" name="att" value="upload">
        <?php echo $imgErr;?>
        </div>
        <br/>
        <div class="form-group">
        Captcha:&nbsp;<b><?php echo $disp?></b><br/><br/>
       Enter captcha <input type="text" name="cap">
        </div>
        <div class="form-group">
        <input type="hidden" name="capsum" value="<?php echo $sum?>">
        </div>
        <div>
         <input type="submit" class="btn btn-success" name="sub" value="submit">
        </div>
        <?php echo $mErr; ?>
        </div>
        </form>
        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
