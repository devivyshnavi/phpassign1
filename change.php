<?php
$mErr="";
if(isset($_POST["sub"])){
    $old=$_POST["old"];
    $origin=$old;
    $new=$_POST["newp"];
    $conf=$_POST["conf"];
    if(empty($old)|| empty($new)||empty($conf)){
        $mErr="pls fill all the fields";
    }
    else{
        if(is_dir("users/$mail")){
            $fo=fopen("users/$mail/details.txt","r");
                $p=trim(fgets($fo));
                if(empty($old)|| empty($new)|| empty($conf)){
                    $mErr="Pls fill all the fields";
                }
                else{
                $old=substr(sha1($old),0,10);
                if(trim($old)==$p){
                    if($new==$conf){
                         $new=substr(sha1($new),0,10);
                         $p=$new;
                         $unam=trim(fgets($fo));
                         $age=trim(fgets($fo));
                         $g=trim(fgets($fo));
                         $oldp=trim(fgets($fo));
                         $oldp=$conf;
                         $fp=fopen("users/$mail/details.txt","w");
                        fwrite($fp,$p."\n");
                         fwrite($fp,$unam."\n");
                         fwrite($fp,$age."\n");
                         fwrite($fp,$g."\n");
                         fwrite($fp,$oldp);
                         $mErr="success";
                    }
                    else
                    $mErr="Confirm password should match";
                    }
                    else 
                    $mErr= "invalid password";
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
            background-image: url("white.jpg");
            text-align: center;
            padding: 18%;
            height: 88vh;
            background-size: cover;
            color:black;
            font-weight: bold;
        }
        </style>
    </head>
<body>
    <form method="post">
    <div class="bg">
        <h2 class="pb-3">Change Password</h2>
    Old Password: <input type="password" name="old"><br/><br/>
    New Password: <input type="password" name="newp"><br/><br/>
    Confirm Password: <input type="password" name="conf"><br/><br/>
    <input type="submit" name="sub" class="btn btn-success" value="Submit">
    <input type="reset" class="btn btn-danger" value="Reset"><br/>
    <?php
    echo $mErr;
    ?>
    </div>
</form>
</body>
</html>