<?php
  $fo=fopen("users/$mail/details.txt","r");
  fgets($fo);
  $un=fgets($fo);
  $age=fgets($fo);
  $gend=fgets($fo);
  $pswd=fgets($fo);
  ?>
  <!DOCTYPE html>
  <html>
      <head>
          <style>
              .bgi{
                background-color: #9e1068;
                text-align: center;
                color: #e0d7ad;
                padding:8%;
                height: 87vh;
                background-size: cover;
              }
              .icon{
                  color:white;
                  font-size: 80px;
              }
              .hding{
                  color: red;
              }
              </style>
      </head>
      <body>
          <div class="bgi">
          <i class="bi bi-person-fill icon"></i>
              <h2 class="hding">Profile</h2>
              <hr>
              <h4>Email : <?php echo $mail?></h4>
              <h4>Name : <?php echo $un?></h4>
              <h4>Age : <?php echo $age?></h4>
              <h4>Gender : <?php echo $gend?></h4>
              <h4>password : <?php echo $pswd?></h4>
              </div>
      </body>
  </html>