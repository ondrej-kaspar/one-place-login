<?php
require_once ('./includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= renderHead(['title' => 'Index']); ?>
</head>
<body>
<div class="container py-12">
  <h1 class="display-lg mb-8">One Place Login - Arnold</h1>

  <h2 class="heading-md">Main pages</h2>
  <ul class="my-4">
    <li><a href="arnold-login.php">Login</a></li>
    <li><a href="arnold-login-link-sent.php">Link sent</a></li>
    <li><a href="arnold-login-link-expired.php">Link expired</a></li>
    <li><a href="arnold-login-using-password.php">Login using password</a></li>
    <li><a href="arnold-login-using-password-error.php">Login using password - error</a></li>
    <li><a href="arnold-login-code-sent.php">Code sent (2FA)</a></li>
    <li><a href="arnold-login-new-password.php">New password</a></li>
    <li><a href="arnold-login-new-password-input.php">New password - input</a></li>
    <li><a href="arnold-login-create-account.php">Create account</a></li>
  </ul>
  
  <hr hidden>
  
  <h2 class="heading-md mt-10">UI Library</h2>
  <ul class="my-4">
    <li><a href="./library/typography.php">Typography</a></li>
    <li><a href="./library/forms.php">Forms</a></li>
    <li><a href="./library/buttons.php">Buttons</a></li>
  </ul>
</div>
</body>
</html>