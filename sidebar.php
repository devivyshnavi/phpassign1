<div class="list-group lis">
  <div class="lis">
  <img src='<?php echo "users/$mail/$mail.jpg"?>' height="100" width=100 class="im">;
  <br/>
  <?php
   $fo=fopen("users/$mail/details.txt","r");
   fgets($fo);
   $un=fgets($fo);
   echo "$un"."<br/>";
  ?>
 </div>
  <a href="?que=profile" class="lis brder border1">profile <i class="bi bi-person-plus iclr"></i>
  </a>
  <a href="?que=chanImg" class="lis brder border1">Change Image
  <i class="bi bi-image iclr"></i>
  </a>
  <a href="?que=logout" class="lis brder border1">Logout
  <i class="bi bi-box-arrow-right iclr"></i>
  </a>
</div>