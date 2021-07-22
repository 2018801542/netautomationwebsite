<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Welcome User <hr> Network Automation System</h1>
         <p>Browes around to find out the pages that you can access!</p>
         <p> Procedures For Using the Application:<p>
         <p>1. Make sure you have installed the Teamviewer software application on your desktop.<p>
         <p>2. Click the (sign in now) button appear on the website.<p>
         <p>3. You will directly connect to the user login. Enter your details here.<p>
         <p>4. After you have logged in , you should see the Access details for the user to access the server.<p>
         <p>5. You should get the User ID and password for enable you to access the server.<p>
         <p>6. Input the User ID and password on Teamviewer application.<p>
         <p>6. You have been successfully access the plants server from your computer :).<p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
