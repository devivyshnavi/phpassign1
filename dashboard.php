<?php 
 session_start();
 $mail=$_SESSION['mailid'];
 if(empty($mail)){
   header("location:index.php");
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
      .bgclr{
        background-color:lightcoral;
        background-size: cover;
      }
      .iclr{
        color:black;
      }
      .im{
        border-radius: 50%;
        text-align: center;
      }
      .cont{
        background-color: #9e1068;
        background-size: cover;
      }
      .border1{
        border:black solid 2px;
        border-radius: 16px;
      }
      .lis{
        background-color: lightcoral;
        color:purple;
        padding:20px;
        font-size: 22px;
      }
      .brder{
        margin:2px;
        padding:10px;
      }
    </style>
  </head>
    <body class="text-center bgclr">
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-white" href="#">Details</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="?que=home">Home
        <i class="bi bi-house"></i> &nbsp;&nbsp;
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="?que=change">Change password
        <i class="bi bi-key"></i> &nbsp;&nbsp;
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Welcome : <?php echo $mail;?></a>
      </li>
    </ul>
  </div>
</nav>
<div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
           <?php include("sidebar.php");?>
        </div>
        <div class="col-sm-9">
              <?php
              switch(@$_GET['que']){
                case 'change': include("change.php");
                break;
                case 'profile': include("profile.php");
                break;
                case 'chanImg': include("chanImg.php");
                break;
                case 'home': include("home.php");
                break;
                case 'logout': include("logout.php");
                break;
              }
              ?>
        </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>